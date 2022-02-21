<?php

declare(strict_types=1);

namespace iggyvolz\obs\Requests;

/**
 * @autogenerated
 */
trait SetTBarPosition
{
    /**
     * @param int $position New position
     * @param null|bool $release Whether to release the TBar. Only set `false` if you know that you will be sending another position update
     * @return \Amp\Future<void>
     */
    public function setTBarPosition(int $position, null|bool $release = null): \Amp\Future
    {
        return $this->request([
            "position" => $position,
            "release" => $release,
        ], "SetTBarPosition");
    }
}
