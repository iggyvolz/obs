<?php

namespace iggyvolz\obs;

use iggyvolz\obs\Message\RequestStatusObject;

class ObsException extends \RuntimeException
{
    public function __construct(?string $comment, int $code = 0)
    {
        parent::__construct($comment ?? "", $code);
    }

    public static function from(RequestStatusObject $requestStatus): self
    {
        $subclass = "\\iggyvolz\\obs\\Exception\\" . $requestStatus->code->name . "Exception";
        if(!is_subclass_of($subclass, self::class)) {
            throw new \LogicException("Unknown exception class $subclass");
        }
        return new $subclass($requestStatus->comment);
    }
}