<?php

declare(strict_types=1);

namespace iggyvolz\obs\Requests;

/**
 * @autogenerated
 */
trait SendStreamCaption
{
    /**
     * @param string $captionText Caption text
     * @return \Amp\Future<void>
     */
    public function sendStreamCaption(string $captionText): \Amp\Future
    {
        return $this->request([
            "captionText" => $captionText,
        ], "SendStreamCaption");
    }
}
