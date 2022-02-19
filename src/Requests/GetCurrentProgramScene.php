<?php

declare(strict_types=1);

namespace iggyvolz\obs\Requests;

/**
 * @autogenerated
 */
trait GetCurrentProgramScene
{
    /**
     * @return \Amp\Future<\iggyvolz\obs\Responses\GetCurrentProgramSceneResponse>
     */
    public function getCurrentProgramScene(): \Amp\Future
    {
        return $this->request([
        ], "GetCurrentProgramScene", \iggyvolz\obs\Responses\GetCurrentProgramSceneResponse::class);
    }
}