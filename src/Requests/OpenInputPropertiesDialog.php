<?php

declare(strict_types=1);

namespace iggyvolz\obs\Requests;

/**
 * @autogenerated
 */
trait OpenInputPropertiesDialog
{
    /**
     * @param string $inputName Name of the input to open the dialog of
     * @return \Amp\Future<void>
     */
    public function openInputPropertiesDialog(string $inputName): \Amp\Future
    {
        return $this->request([
            "inputName" => $inputName,
        ], "OpenInputPropertiesDialog");
    }
}