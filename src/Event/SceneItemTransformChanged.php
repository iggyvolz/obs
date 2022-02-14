<?php

declare(strict_types=1);

namespace iggyvolz\obs\Event;

/**
 * @autogenerated
 */
class SceneItemTransformChanged
{
    /**
     * @param string $sceneName
     * @param int $sceneItemId
     * @param mixed $sceneItemTransform
     */
    public function __construct(
        public readonly string $sceneName,
        public readonly int $sceneItemId,
        public readonly mixed $sceneItemTransform,
    ) {
    }
}
