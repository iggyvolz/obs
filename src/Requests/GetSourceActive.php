<?php

declare(strict_types=1);

namespace iggyvolz\obs\Requests;

/**
 * @autogenerated
 */
trait GetSourceActive
{
    /**
     * @param string $sourceName Name of the source to get the active state of
     * @return \Amp\Future<\iggyvolz\obs\Responses\GetSourceActiveResponse>
     */
    public function getSourceActive(string $sourceName): \Amp\Future
    {
        return $this->request([
            "sourceName" => $sourceName,
        ], "GetSourceActive", \iggyvolz\obs\Responses\GetSourceActiveResponse::class);
    }
}
