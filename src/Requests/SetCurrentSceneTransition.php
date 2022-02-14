<?php

declare(strict_types=1);

namespace iggyvolz\obs\Requests;

/**
 * @autogenerated
 */
trait SetCurrentSceneTransition
{
    /**
     * @param string $transitionName Name of the transition to make active
     * @return \Amp\Future<void>
     */
    public function setCurrentSceneTransition(string $transitionName): \Amp\Future
    {
        return $this->request([
            "transitionName" => $transitionName,
        ], "SetCurrentSceneTransition");
    }
}
