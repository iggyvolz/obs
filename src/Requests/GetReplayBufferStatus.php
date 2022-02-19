<?php

declare(strict_types=1);

namespace iggyvolz\obs\Requests;

/**
 * @autogenerated
 */
trait GetReplayBufferStatus
{
    /**
     * @return \Amp\Future<\iggyvolz\obs\Responses\GetReplayBufferStatusResponse>
     */
    public function getReplayBufferStatus(): \Amp\Future
    {
        return $this->request([
        ], "GetReplayBufferStatus", \iggyvolz\obs\Responses\GetReplayBufferStatusResponse::class);
    }
}