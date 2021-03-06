<?php

declare(strict_types=1);

namespace iggyvolz\obs\Requests;

/**
 * @autogenerated
 */
trait PressInputPropertiesButton
{
    /**
     * @param string $inputName Name of the input
     * @param string $propertyName Name of the button property to press
     * @return \Amp\Future<void>
     */
    public function pressInputPropertiesButton(string $inputName, string $propertyName): \Amp\Future
    {
        return $this->request([
            "inputName" => $inputName,
            "propertyName" => $propertyName,
        ], "PressInputPropertiesButton");
    }
}
