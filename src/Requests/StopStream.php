<?php

declare(strict_types=1);

namespace iggyvolz\obs\Requests;

/**
 * @autogenerated
 */
trait StopStream
{
    /**
     * @return \Amp\Future<void>
     */
    public function stopStream(): \Amp\Future
    {
        return $this->request([
        ], "StopStream");
    }
}
