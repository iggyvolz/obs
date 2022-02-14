<?php

namespace iggyvolz\obs\Message;

use iggyvolz\obs\Enum\WebSocketOpCode;

final class Event extends Message
{
    public readonly object $event;
    public function __construct(
        public readonly string $eventType,
        public readonly int $eventIntent,
        public readonly ?array $eventData,
    )
    {
    }

    public static function getOpcode(): WebSocketOpCode
    {
        return WebSocketOpCode::Event;
    }
}