<?php

namespace iggyvolz\obs;

final class DefaultRequestIdGenerator implements RequestIdGenerator
{
    public function getRequestId(): string
    {
        return base64_encode(random_bytes(33));
    }
}
