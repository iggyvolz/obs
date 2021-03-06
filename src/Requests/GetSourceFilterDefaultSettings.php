<?php

declare(strict_types=1);

namespace iggyvolz\obs\Requests;

/**
 * @autogenerated
 */
trait GetSourceFilterDefaultSettings
{
    /**
     * @param string $filterKind Filter kind to get the default settings for
     * @return \Amp\Future<\iggyvolz\obs\Responses\GetSourceFilterDefaultSettingsResponse>
     */
    public function getSourceFilterDefaultSettings(string $filterKind): \Amp\Future
    {
        return $this->request([
            "filterKind" => $filterKind,
        ], "GetSourceFilterDefaultSettings", \iggyvolz\obs\Responses\GetSourceFilterDefaultSettingsResponse::class);
    }
}
