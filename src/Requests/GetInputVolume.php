<?php

declare(strict_types=1);

namespace iggyvolz\obs\Requests;

/**
 * @autogenerated
 */
trait GetInputVolume
{
    /**
     * @param string $inputName Name of the input to get the volume of
     * @return \Amp\Future<\iggyvolz\obs\Responses\GetInputVolumeResponse>
     */
    public function getInputVolume(string $inputName): \Amp\Future
    {
        return $this->request([
            "inputName" => $inputName,
        ], "GetInputVolume", \iggyvolz\obs\Responses\GetInputVolumeResponse::class);
    }
}
