<?php

declare(strict_types=1);

namespace iggyvolz\obs\Requests;

/**
 * @autogenerated
 */
trait ToggleInputMute
{
    /**
     * @param string $inputName Name of the input to toggle the mute state of
     * @return \Amp\Future<\iggyvolz\obs\Responses\ToggleInputMuteResponse>
     */
    public function toggleInputMute(string $inputName): \Amp\Future
    {
        return $this->request([
            "inputName" => $inputName,
        ], "ToggleInputMute", \iggyvolz\obs\Responses\ToggleInputMuteResponse::class);
    }
}
