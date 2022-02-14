<?php

namespace iggyvolz\obs\Generation;

final class ObsEnumIdentifier
{
    public function __construct(
        public readonly string $description,
        public readonly string $enumIdentifier,
        public readonly string $rpcVersion,
        public readonly bool $deprecated,
        public readonly string $initialVersion,
        public readonly int|string $enumValue,
    )
    {
    }
}