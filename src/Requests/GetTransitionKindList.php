<?php

declare(strict_types=1);

namespace iggyvolz\obs\Requests;

/**
 * @autogenerated
 */
trait GetTransitionKindList
{
    /**
     * @return \Amp\Future<\iggyvolz\obs\Responses\GetTransitionKindListResponse>
     */
    public function getTransitionKindList(): \Amp\Future
    {
        return $this->request([
        ], "GetTransitionKindList", \iggyvolz\obs\Responses\GetTransitionKindListResponse::class);
    }
}