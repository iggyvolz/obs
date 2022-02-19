<?php

declare(strict_types=1);

namespace iggyvolz\obs\Requests;

/**
 * @autogenerated
 */
trait GetSpecialInputs
{
    /**
     * @return \Amp\Future<\iggyvolz\obs\Responses\GetSpecialInputsResponse>
     */
    public function getSpecialInputs(): \Amp\Future
    {
        return $this->request([
        ], "GetSpecialInputs", \iggyvolz\obs\Responses\GetSpecialInputsResponse::class);
    }
}