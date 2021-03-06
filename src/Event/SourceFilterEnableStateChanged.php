<?php

declare(strict_types=1);

namespace iggyvolz\obs\Event;

/**
 * @autogenerated
 */
class SourceFilterEnableStateChanged
{
    /**
     * @param string $sourceName
     * @param string $filterName
     * @param bool $filterEnabled
     */
    public function __construct(
        public readonly string $sourceName,
        public readonly string $filterName,
        public readonly bool $filterEnabled,
    ) {
    }
}
