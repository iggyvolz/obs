<?php

declare(strict_types=1);

namespace iggyvolz\obs\Requests;

/**
 * @autogenerated
 */
trait ResumeRecord
{
    /**
     * @return \Amp\Future<void>
     */
    public function resumeRecord(): \Amp\Future
    {
        return $this->request([
        ], "ResumeRecord");
    }
}