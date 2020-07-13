<?php

namespace SmartCodeNet\GusApiBundle\Exception;

use Throwable;

class BusinessEntityNotFoundException extends \Exception
{
    public function __construct(
        $message = "Business entity not found",
        $code = 404,
        Throwable $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
