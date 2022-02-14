<?php

declare(strict_types=1);

namespace iggyvolz\obs\Requests;

/**
 * @autogenerated
 */
trait GetHotkeyList
{
    /**
     * @return \Amp\Future<\iggyvolz\obs\Responses\GetHotkeyListResponse>
     */
    public function getHotkeyList(): \Amp\Future
    {
        return $this->request([
        ], "GetHotkeyList", \iggyvolz\obs\Responses\GetHotkeyListResponse::class);
    }
}
