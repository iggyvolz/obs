<?php

declare(strict_types=1);

namespace iggyvolz\obs\Requests;

/**
 * @autogenerated
 */
trait SetSceneItemEnabled
{
    /**
     * @param string $sceneName Name of the scene the item is in
     * @param int $sceneItemId Numeric ID of the scene item
     * @param bool $sceneItemEnabled New enable state of the scene item
     * @return \Amp\Future<void>
     */
    public function setSceneItemEnabled(string $sceneName, int $sceneItemId, bool $sceneItemEnabled): \Amp\Future
    {
        return $this->request([
            "sceneName" => $sceneName,
            "sceneItemId" => $sceneItemId,
            "sceneItemEnabled" => $sceneItemEnabled,
        ], "SetSceneItemEnabled");
    }
}
