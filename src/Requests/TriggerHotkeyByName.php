<?php

declare(strict_types=1);

namespace iggyvolz\obs\Requests;

/**
 * @autogenerated
 */
trait TriggerHotkeyByName
{
    /**
     * @param string $hotkeyName Name of the hotkey to trigger
     * @return \Amp\Future<void>
     */
    public function triggerHotkeyByName(string $hotkeyName): \Amp\Future
    {
        return $this->request([
            "hotkeyName" => $hotkeyName,
        ], "TriggerHotkeyByName");
    }
}