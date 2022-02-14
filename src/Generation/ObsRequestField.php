<?php

namespace iggyvolz\obs\Generation;

final class ObsRequestField extends ObsField
{
    public function __construct(
        string $valueName,
        string $valueType,
        string $valueDescription,
        public readonly ?string $valueRestrictions,
        public readonly bool $valueOptional,
        public readonly ?string $valueOptionalBehavior,
    )
    {
        parent::__construct($valueName, $valueType, $valueDescription);
    }
}