<?php

declare(strict_types=1);

namespace iggyvolz\obs\Event;

/**
 * @autogenerated
 */
class CurrentSceneCollectionChanged
{
    /**
     * @param string $sceneCollectionName
     */
    public function __construct(public readonly string $sceneCollectionName)
    {
    }
}
