<?php

declare(strict_types=1);

namespace iggyvolz\obs\Requests;

/**
 * @autogenerated
 */
trait OpenInputInteractDialog
{
    /**
     * @param string $inputName Name of the input to open the dialog of
     * @return \Amp\Future<void>
     */
    public function openInputInteractDialog(string $inputName): \Amp\Future
    {
        return $this->request([
            "inputName" => $inputName,
        ], "OpenInputInteractDialog");
    }
}