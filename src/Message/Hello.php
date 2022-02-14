<?php

namespace iggyvolz\obs\Message;

use iggyvolz\obs\Enum\WebSocketOpCode;

final class Hello extends Message
{
    public function __construct(
        public readonly string $obsWebSocketVersion,
        public readonly int $rpcVersion,
        public ?Authentication $authentication,
    )
    {
    }

    public static function getOpcode(): WebSocketOpCode
    {
        return WebSocketOpCode::Hello;
    }
}