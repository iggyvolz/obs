<?php

declare(strict_types=1);

namespace iggyvolz\obs\Requests;

/**
 * @autogenerated
 */
trait DuplicateSceneItem
{
    /**
     * @param string $sceneName Name of the scene the item is in
     * @param int $sceneItemId Numeric ID of the scene item
     * @param null|string $destinationSceneName Name of the scene to create the duplicated item in
     * @return \Amp\Future<\iggyvolz\obs\Responses\DuplicateSceneItemResponse>
     */
    public function duplicateSceneItem(
        string $sceneName,
        int $sceneItemId,
        null|string $destinationSceneName = null
    ): \Amp\Future {
        return $this->request([
            "sceneName" => $sceneName,
            "sceneItemId" => $sceneItemId,
            "destinationSceneName" => $destinationSceneName,
        ], "DuplicateSceneItem", \iggyvolz\obs\Responses\DuplicateSceneItemResponse::class);
    }
}
