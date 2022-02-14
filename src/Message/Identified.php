<?php

namespace iggyvolz\obs\Message;

use iggyvolz\obs\Enum\WebSocketOpCode;

final class Identified extends Message
{
    public function __construct(
        public readonly int $negotiatedRpcVersion,
    )
    {
    }

    public static function getOpcode(): WebSocketOpCode
    {
        return WebSocketOpCode::Identified;
    }
}