<?php

declare(strict_types=1);

namespace iggyvolz\obs\Requests;

/**
 * @autogenerated
 */
trait SetSceneSceneTransitionOverride
{
    /**
     * @param string $sceneName Name of the scene
     * @param null|string $transitionName Name of the scene transition to use as override. Specify `null` to remove
     * @param null|int $transitionDuration Duration to use for any overridden transition. Specify `null` to remove
     * @return \Amp\Future<void>
     */
    public function setSceneSceneTransitionOverride(
        string $sceneName,
        null|string $transitionName = null,
        null|int $transitionDuration = null
    ): \Amp\Future {
        return $this->request([
            "sceneName" => $sceneName,
            "transitionName" => $transitionName,
            "transitionDuration" => $transitionDuration,
        ], "SetSceneSceneTransitionOverride");
    }
}