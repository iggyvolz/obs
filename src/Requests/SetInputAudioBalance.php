<?php

declare(strict_types=1);

namespace iggyvolz\obs\Requests;

/**
 * @autogenerated
 */
trait SetInputAudioBalance
{
    /**
     * @param string $inputName Name of the input to set the audio balance of
     * @param int $inputAudioBalance New audio balance value
     * @return \Amp\Future<void>
     */
    public function setInputAudioBalance(string $inputName, int $inputAudioBalance): \Amp\Future
    {
        return $this->request([
            "inputName" => $inputName,
            "inputAudioBalance" => $inputAudioBalance,
        ], "SetInputAudioBalance");
    }
}
