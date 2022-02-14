<?php

namespace iggyvolz\obs\Message;

use iggyvolz\obs\Enum\WebSocketOpCode;

final class RequestResponse extends Message
{
    public function __construct(
        public readonly string $requestType,
        public readonly string $requestId,
        public readonly RequestStatusObject $requestStatus,
        public readonly ?array $responseData = null,
    )
    {
    }

    public static function getOpcode(): WebSocketOpCode
    {
        return WebSocketOpCode::RequestResponse;
    }
}