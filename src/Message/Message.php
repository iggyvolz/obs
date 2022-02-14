<?php

namespace iggyvolz\obs\Message;

use iggyvolz\obs\Enum\WebSocketOpCode;
use iggyvolz\obs\Obs;
use iggyvolz\obs\ObsException;

abstract class Message
{
    public abstract static function getOpcode(): WebSocketOpCode;

    /**
     * @var list<class-string<self>>
     */
    private const SUBCLASSES = [
        Event::class,
        Hello::class,
        Identified::class,
        Identify::class,
        Reidentify::class,
        Request::class,
        RequestResponse::class,
    ];

    public static function decode(string $buffer): self
    {
        $decoded = json_decode($buffer, JSON_THROW_ON_ERROR);
        foreach(self::SUBCLASSES as $subclass) {
            /**
             * @var WebSocketOpCode $opcode
             */
            $opcode = $subclass::getOpcode();
            if($opcode->value === $decoded["op"]) {
                return Obs::decode($decoded["d"], $subclass);
            }
        }
        throw new ObsException("Unknown opcode " . $decoded["op"]);
    }
}