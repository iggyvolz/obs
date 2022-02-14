<?php

namespace iggyvolz\obs\Message;

final class Authentication
{
    public function __construct(
        public readonly string $challenge,
        public readonly string $salt,
    )
    {
    }
}