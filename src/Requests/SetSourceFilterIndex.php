<?php

declare(strict_types=1);

namespace iggyvolz\obs\Requests;

/**
 * @autogenerated
 */
trait SetSourceFilterIndex
{
    /**
     * @param string $sourceName Name of the source the filter is on
     * @param string $filterName Name of the filter
     * @param int $filterIndex New index position of the filter
     * @return \Amp\Future<void>
     */
    public function setSourceFilterIndex(string $sourceName, string $filterName, int $filterIndex): \Amp\Future
    {
        return $this->request([
            "sourceName" => $sourceName,
            "filterName" => $filterName,
            "filterIndex" => $filterIndex,
        ], "SetSourceFilterIndex");
    }
}
