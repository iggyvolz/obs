<?php

declare(strict_types=1);

namespace iggyvolz\obs\Exception;

/**
 * @autogenerated
 */
class ResourceCreationFailedException extends \iggyvolz\obs\ObsException
{
    public function __construct(?string $comment)
    {
        parent::__construct($comment, \iggyvolz\obs\Enum\RequestStatus::ResourceCreationFailed->value);
    }
}
