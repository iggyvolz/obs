<?php

declare(strict_types=1);

namespace iggyvolz\obs\Requests;

/**
 * @autogenerated
 */
trait RemoveProfile
{
    /**
     * @param string $profileName Name of the profile to remove
     * @return \Amp\Future<void>
     */
    public function removeProfile(string $profileName): \Amp\Future
    {
        return $this->request([
            "profileName" => $profileName,
        ], "RemoveProfile");
    }
}