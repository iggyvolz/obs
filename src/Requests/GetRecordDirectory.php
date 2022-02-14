<?php

declare(strict_types=1);

namespace iggyvolz\obs\Requests;

/**
 * @autogenerated
 */
trait GetRecordDirectory
{
    /**
     * @return \Amp\Future<\iggyvolz\obs\Responses\GetRecordDirectoryResponse>
     */
    public function getRecordDirectory(): \Amp\Future
    {
        return $this->request([
        ], "GetRecordDirectory", \iggyvolz\obs\Responses\GetRecordDirectoryResponse::class);
    }
}
