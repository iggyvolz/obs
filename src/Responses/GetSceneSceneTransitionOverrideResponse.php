<?php

declare(strict_types=1);

namespace iggyvolz\obs\Responses;

/**
 * @autogenerated
 */
class GetSceneSceneTransitionOverrideResponse
{
    /**
     * @param string $transitionName
     * @param int $transitionDuration
     */
    public function __construct(
        public readonly string $transitionName,
        public readonly int $transitionDuration,
    ) {
    }
}
