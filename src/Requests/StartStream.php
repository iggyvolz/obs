<?php

declare(strict_types=1);

namespace iggyvolz\obs\Requests;

/**
 * @autogenerated
 */
trait StartStream
{
    /**
     * @return \Amp\Future<void>
     */
    public function startStream(): \Amp\Future
    {
        return $this->request([
        ], "StartStream");
    }
}