<?php

declare(strict_types=1);

namespace iggyvolz\obs\Requests;

/**
 * @autogenerated
 */
trait SetSceneItemTransform
{
    /**
     * @param string $sceneName Name of the scene the item is in
     * @param int $sceneItemId Numeric ID of the scene item
     * @param SceneItemTransformUpdate $sceneItemTransform Object containing scene item transform info to update
     * @return \Amp\Future<void>
     */
    public function setSceneItemTransform(string $sceneName, int $sceneItemId, SceneItemTransformUpdate $sceneItemTransform): \Amp\Future
    {
        return $this->request([
            "sceneName" => $sceneName,
            "sceneItemId" => $sceneItemId,
            "sceneItemTransform" => $sceneItemTransform,
        ], "SetSceneItemTransform");
    }
}
