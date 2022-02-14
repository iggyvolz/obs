<?php

declare(strict_types=1);

namespace iggyvolz\obs\Requests;

/**
 * @autogenerated
 */
trait GetSceneList
{
    /**
     * @return \Amp\Future<\iggyvolz\obs\Responses\GetSceneListResponse>
     */
    public function getSceneList(): \Amp\Future
    {
        return $this->request([
        ], "GetSceneList", \iggyvolz\obs\Responses\GetSceneListResponse::class);
    }
}
