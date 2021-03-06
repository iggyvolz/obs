<?php

declare(strict_types=1);

namespace iggyvolz\obs\Requests;

/**
 * @autogenerated
 */
trait ToggleReplayBuffer
{
    /**
     * @return \Amp\Future<\iggyvolz\obs\Responses\ToggleReplayBufferResponse>
     */
    public function toggleReplayBuffer(): \Amp\Future
    {
        return $this->request([
        ], "ToggleReplayBuffer", \iggyvolz\obs\Responses\ToggleReplayBufferResponse::class);
    }
}
