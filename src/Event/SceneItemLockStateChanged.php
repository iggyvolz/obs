<?php

declare(strict_types=1);

namespace iggyvolz\obs\Event;

/**
 * @autogenerated
 */
class SceneItemLockStateChanged
{
    /**
     * @param string $sceneName
     * @param int $sceneItemId
     * @param bool $sceneItemLocked
     */
    public function __construct(
        public readonly string $sceneName,
        public readonly int $sceneItemId,
        public readonly bool $sceneItemLocked,
    ) {
    }
}
