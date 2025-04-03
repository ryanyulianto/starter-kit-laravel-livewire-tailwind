<?php

namespace App\Exceptions;

use Exception;

class HandledException extends Exception
{
    public function __construct($message)
    {
        parent::__construct($message);
    }
}
