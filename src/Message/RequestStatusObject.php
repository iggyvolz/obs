<?php

namespace iggyvolz\obs\Message;

use iggyvolz\obs\Enum\RequestStatus;

final class RequestStatusObject
{
    public readonly RequestStatus $code;

    public function __construct(
        public readonly bool $result,
        int $code,
        public readonly ?string $comment,
    )
    {
        $this->code = RequestStatus::from($code);
    }
}