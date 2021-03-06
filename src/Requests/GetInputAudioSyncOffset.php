<?php

declare(strict_types=1);

namespace iggyvolz\obs\Requests;

/**
 * @autogenerated
 */
trait GetInputAudioSyncOffset
{
    /**
     * @param string $inputName Name of the input to get the audio sync offset of
     * @return \Amp\Future<\iggyvolz\obs\Responses\GetInputAudioSyncOffsetResponse>
     */
    public function getInputAudioSyncOffset(string $inputName): \Amp\Future
    {
        return $this->request([
            "inputName" => $inputName,
        ], "GetInputAudioSyncOffset", \iggyvolz\obs\Responses\GetInputAudioSyncOffsetResponse::class);
    }
}
