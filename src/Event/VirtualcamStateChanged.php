<?php

declare(strict_types=1);

namespace iggyvolz\obs\Event;

/**
 * @autogenerated
 */
class VirtualcamStateChanged
{
    /**
     * @param bool $outputActive
     * @param string $outputState
     */
    public function __construct(
        public readonly bool $outputActive,
        public readonly string $outputState,
    ) {
    }
}