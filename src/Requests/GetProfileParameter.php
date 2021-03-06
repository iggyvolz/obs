<?php

declare(strict_types=1);

namespace iggyvolz\obs\Requests;

/**
 * @autogenerated
 */
trait GetProfileParameter
{
    /**
     * @param string $parameterCategory Category of the parameter to get
     * @param string $parameterName Name of the parameter to get
     * @return \Amp\Future<\iggyvolz\obs\Responses\GetProfileParameterResponse>
     */
    public function getProfileParameter(string $parameterCategory, string $parameterName): \Amp\Future
    {
        return $this->request([
            "parameterCategory" => $parameterCategory,
            "parameterName" => $parameterName,
        ], "GetProfileParameter", \iggyvolz\obs\Responses\GetProfileParameterResponse::class);
    }
}
