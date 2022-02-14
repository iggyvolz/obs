<?php

namespace iggyvolz\obs;

use Amp\DeferredFuture;
use Amp\Future;
use Amp\Websocket\Client\Connection;
use Amp\Websocket\Client\Handshake;
use Closure;
use CuyZ\Valinor\Mapper\Source\JsonSource;
use CuyZ\Valinor\Mapper\TreeMapper;
use CuyZ\Valinor\MapperBuilder;
use iggyvolz\obs\Message\Event;
use iggyvolz\obs\Message\Hello;
use iggyvolz\obs\Message\Identified;
use iggyvolz\obs\Message\Identify;
use iggyvolz\obs\Message\Message;
use iggyvolz\obs\Message\Request;
use iggyvolz\obs\Message\RequestResponse;
use Psr\Http\Message\UriInterface as PsrUri;
use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;
use function Amp\Websocket\Client\connect;

class Obs
{
    use Obs_;

    /**
     * @var Closure(): string
     */
    private readonly Closure $requestIdGenerator;

    private ?Connection $connection = null;

    private const RPC_VERSION = 1;
    private readonly DeferredFuture $_connected;
    public readonly Future $connected;

    /**
     * @param null|Closure(RequestResponse):string $requestIdGenerator
     */
    public function __construct(
        private readonly Handshake|PsrUri|string $handshake,
        private readonly ?string $authenticationPassword = null,
        ?Closure $requestIdGenerator = null,
        private readonly LoggerInterface $logger = new NullLogger(),
    )
    {
        $this->requestIdGenerator = $requestIdGenerator ?? fn() => base64_encode(random_bytes(33));
        $this->_connected = new DeferredFuture();
        $this->connected = $this->_connected->getFuture();
    }

    public function run(): void
    {
        if(!is_null($this->connection)) {
            throw new \LogicException("Only one instance of run() at a time");
        }
        $this->connection = connect($this->handshake);
        try {
            while($msg = $this->connection->receive()) {
                $messageText = $msg->buffer();
                $this->logger->info("RECV $messageText");
                $message = Message::decode($messageText);
                if($message instanceof Hello) {
                    if($message->authentication) {
                        $this->send(new Identify(self::RPC_VERSION, $this->getAuthentication($message->authentication->challenge, $message->authentication->salt)));
                    } else {
                        $this->send(new Identify(self::RPC_VERSION));
                    }
                } elseif($message instanceof Identified) {
                    if($message->negotiatedRpcVersion !== self::RPC_VERSION) {
                        throw new ObsException("Server declared unknown RPC version " . $message->negotiatedRpcVersion);
                    }
                    $this->_connected->complete();
                } elseif($message instanceof Event) {
                    $callbacks = $this->eventCallbacks[$message->eventType] ?? [];
                    foreach ($callbacks as $callback) {
                        $callback($message);
                    }
                } elseif($message instanceof RequestResponse) {
                    $callback = $this->requestCallbacks[$message->requestId] ?? null;
                    if($callback) {
                        $callback($message);
                        unset($this->requestCallbacks[$message->requestId]);
                    }
                }
            }
        } finally {
            $this->connection->close();
            $this->connection = null;
        }
    }


    private function send(Message $message): void
    {
        $this->logger->info("SEND " . json_encode([
                "op" => $message->getOpCode()->value,
                "d" => $message
            ], JSON_THROW_ON_ERROR));
        $this->connection->send(json_encode([
            "op" => $message->getOpCode()->value,
            "d" => $message
        ], JSON_THROW_ON_ERROR));
    }

    /**
     * @var array<string,Closure(RequestResponse): void
     */
    private array $requestCallbacks = [];

    /**
     * @var array<string,Closure(Event): void
     */
    private array $eventCallbacks = [];

    public function addEventHandler(Closure $closure): void {
        $reflClosure = new \ReflectionFunction($closure);
        $firstParameter = $reflClosure->getParameters()[0] ?? throw new \LogicException("addEventHandler should be called with a closure with one parameter");
        $type = $firstParameter->getType();
        if(!$type instanceof \ReflectionNamedType) throw new \LogicException("addEventHandler should be called with a closure with one typed parameter");
        $typeName = $type->getName();
        if(!str_starts_with($typeName, "iggyvolz\\obs\\Event\\")) throw new \LogicException("addEventHandler should be called with a closure with one typed parameter in the Event namespace");
        $type = substr($typeName, strlen("iggyvolz\\obs\\Event\\"));
        $this->eventCallbacks[$type] ??= [];
        $this->eventCallbacks[$type][] = function(Event $e) use($typeName, $closure) {
                $closure(Obs::decode($e->eventData, $typeName));
        };
    }

    /**
     * @template T
     * @param array $data
     * @param string $requestType
     * @param class-string<T>|null $responseType
     * @return Future<T>
     */
    private function request(array $data, string $requestType, ?string $responseType = null): Future
    {
        $future = new DeferredFuture();
        /** @var string $requestId */
        $requestId = ($this->requestIdGenerator)();
        $this->send(new Request(
            $requestType,
            $requestId,
            $data
        ));
        $this->requestCallbacks[$requestId] = function(RequestResponse $response) use($future, $responseType): void {
            if($response->requestStatus->result) {
                $future->complete(is_null($responseType) ? null : self::decode($response->requestId, $responseType));
            } else {
                $future->error(ObsException::from($response->requestStatus));
            }
        };
        return $future->getFuture();
    }

    private static function getMapper(): TreeMapper
    {
        return (new MapperBuilder())->mapper();
    }

    /**
     * @template T
     * @param string|array $json
     * @param class-string<T> $class
     * @return T
     */
    public static function decode(string|array $json, string $class): object
    {
        return self::getMapper()->map($class, is_string($json) ? new JsonSource($json) : $json);
    }

    private function getAuthentication(string $challenge, string $salt): string
    {
        if(is_null($this->authenticationPassword)) {
            throw new ObsException("Remote requested authentication, no password provided");
        }
        // https://github.com/obsproject/obs-websocket/blob/master/docs/generated/protocol.md#creating-an-authentication-string
        $base64Secret = base64_encode(hash("sha256", $this->authenticationPassword . $salt, true));
        return base64_encode(hash("sha256", $base64Secret . $challenge, true));
    }
}