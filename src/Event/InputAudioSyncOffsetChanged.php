<?php

declare(strict_types=1);

namespace iggyvolz\obs\Event;

/**
 * @autogenerated
 */
class InputAudioSyncOffsetChanged
{
    /**
     * @param string $inputName
     * @param int $inputAudioSyncOffset
     */
    public function __construct(
        public readonly string $inputName,
        public readonly int $inputAudioSyncOffset,
    ) {
    }
}