<?php

declare(strict_types=1);

namespace iggyvolz\obs\Requests;

/**
 * @autogenerated
 */
trait BroadcastCustomEvent
{
    /**
     * @param mixed $eventData Data payload to emit to all receivers
     * @return \Amp\Future<void>
     */
    public function broadcastCustomEvent(mixed $eventData): \Amp\Future
    {
        return $this->request([
            "eventData" => $eventData,
        ], "BroadcastCustomEvent");
    }
}
