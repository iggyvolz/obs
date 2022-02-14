<?php

declare(strict_types=1);

namespace iggyvolz\obs\Requests;

/**
 * @autogenerated
 */
trait CreateSceneCollection
{
    /**
     * @param string $sceneCollectionName Name for the new scene collection
     * @return \Amp\Future<void>
     */
    public function createSceneCollection(string $sceneCollectionName): \Amp\Future
    {
        return $this->request([
            "sceneCollectionName" => $sceneCollectionName,
        ], "CreateSceneCollection");
    }
}
