<?php

namespace iggyvolz\obs\Message;

use iggyvolz\obs\Enum\WebSocketOpCode;
use iggyvolz\obs\Enum\EventSubscription;

final class Identify extends Message
{
    public readonly int $eventSubscriptions;

    /**
     * @param list<EventSubscription> $eventSubscriptions
     */
    public function __construct(
        public readonly int $rpcVersion,
        public readonly ?string $authentication = null,
        array $eventSubscriptions = EventSubscription::All
    )
    {
        $this->eventSubscriptions = array_reduce($eventSubscriptions, fn(int $carry, EventSubscription $item): int => $carry | $item->value, 0);
    }

    public static function getOpcode(): WebSocketOpCode
    {
        return WebSocketOpCode::Identify;
    }
}