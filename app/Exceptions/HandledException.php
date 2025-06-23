<?php

namespace App\Exceptions;

use App\Traits\HandleResponseApi;
use Exception;

class HandledException extends Exception
{
    use HandleResponseApi;
    protected $data;

    public function __construct($message = "", $data = [])
    {
        parent::__construct($message);
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }

}
