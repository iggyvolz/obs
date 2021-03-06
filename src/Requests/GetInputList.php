<?php

declare(strict_types=1);

namespace iggyvolz\obs\Requests;

/**
 * @autogenerated
 */
trait GetInputList
{
    /**
     * @param null|string $inputKind Restrict the array to only inputs of the specified kind
     * @return \Amp\Future<\iggyvolz\obs\Responses\GetInputListResponse>
     */
    public function getInputList(null|string $inputKind = null): \Amp\Future
    {
        return $this->request([
            "inputKind" => $inputKind,
        ], "GetInputList", \iggyvolz\obs\Responses\GetInputListResponse::class);
    }
}
