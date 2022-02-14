<?php

declare(strict_types=1);

namespace iggyvolz\obs\Requests;

/**
 * @autogenerated
 */
trait GetPersistentData
{
    /**
     * @param string $realm The data realm to select. `OBS_WEBSOCKET_DATA_REALM_GLOBAL` or `OBS_WEBSOCKET_DATA_REALM_PROFILE`
     * @param string $slotName The name of the slot to retrieve data from
     * @return \Amp\Future<\iggyvolz\obs\Responses\GetPersistentDataResponse>
     */
    public function getPersistentData(string $realm, string $slotName): \Amp\Future
    {
        return $this->request([
            "realm" => $realm,
            "slotName" => $slotName,
        ], "GetPersistentData", \iggyvolz\obs\Responses\GetPersistentDataResponse::class);
    }
}
