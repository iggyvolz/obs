<?php

namespace iggyvolz\obs\Message;

use iggyvolz\obs\Enum\WebSocketOpCode;

final class Request extends Message
{
    public function __construct(
        public readonly string $requestType,
        public readonly string $requestId,
        public readonly array|null $requestData,
    )
    {
    }

    public static function getOpcode(): WebSocketOpCode
    {
        return WebSocketOpCode::Request;
    }
}