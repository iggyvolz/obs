<?php

declare(strict_types=1);

namespace iggyvolz\obs\Responses;

/**
 * @autogenerated
 */
class GetSourceActiveResponse
{
    /**
     * @param bool $videoActive
     * @param bool $videoShowing
     */
    public function __construct(
        public readonly bool $videoActive,
        public readonly bool $videoShowing,
    ) {
    }
}
