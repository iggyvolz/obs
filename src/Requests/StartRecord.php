<?php

declare(strict_types=1);

namespace iggyvolz\obs\Requests;

/**
 * @autogenerated
 */
trait StartRecord
{
    /**
     * @return \Amp\Future<void>
     */
    public function startRecord(): \Amp\Future
    {
        return $this->request([
        ], "StartRecord");
    }
}
