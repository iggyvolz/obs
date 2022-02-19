<?php

declare(strict_types=1);

namespace iggyvolz\obs\Event;

/**
 * @autogenerated
 */
class ProfileListChanged
{
    /**
     * @param list<string> $profiles
     */
    public function __construct(public readonly array $profiles)
    {
    }
}