<?php

declare(strict_types=1);

namespace iggyvolz\obs\Requests;

/**
 * @autogenerated
 */
trait GetGroupList
{
    /**
     * @return \Amp\Future<\iggyvolz\obs\Responses\GetGroupListResponse>
     */
    public function getGroupList(): \Amp\Future
    {
        return $this->request([
        ], "GetGroupList", \iggyvolz\obs\Responses\GetGroupListResponse::class);
    }
}
