<?php

declare(strict_types=1);

namespace iggyvolz\obs\Requests;

/**
 * @autogenerated
 */
trait ToggleRecordPause
{
    /**
     * @return \Amp\Future<void>
     */
    public function toggleRecordPause(): \Amp\Future
    {
        return $this->request([
        ], "ToggleRecordPause");
    }
}
