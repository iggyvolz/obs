<?php

declare(strict_types=1);

namespace iggyvolz\obs\Requests;

/**
 * @autogenerated
 */
trait GetSceneItemBlendMode
{
    /**
     * @param string $sceneName Name of the scene the item is in
     * @param int $sceneItemId Numeric ID of the scene item
     * @return \Amp\Future<\iggyvolz\obs\Responses\GetSceneItemBlendModeResponse>
     */
    public function getSceneItemBlendMode(string $sceneName, int $sceneItemId): \Amp\Future
    {
        return $this->request([
            "sceneName" => $sceneName,
            "sceneItemId" => $sceneItemId,
        ], "GetSceneItemBlendMode", \iggyvolz\obs\Responses\GetSceneItemBlendModeResponse::class);
    }
}
