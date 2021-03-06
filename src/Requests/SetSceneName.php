<?php

declare(strict_types=1);

namespace iggyvolz\obs\Requests;

/**
 * @autogenerated
 */
trait SetSceneName
{
    /**
     * @param string $sceneName Name of the scene to be renamed
     * @param string $newSceneName New name for the scene
     * @return \Amp\Future<void>
     */
    public function setSceneName(string $sceneName, string $newSceneName): \Amp\Future
    {
        return $this->request([
            "sceneName" => $sceneName,
            "newSceneName" => $newSceneName,
        ], "SetSceneName");
    }
}
