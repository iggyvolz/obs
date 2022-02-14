<?php

namespace iggyvolz\obs\Generation;

class ObsField
{
    public function __construct(
        public readonly string $valueName,
        public readonly string $valueType,
        public readonly string $valueDescription,
    )
    {
    }
}