<?php

namespace App\Exceptions;

use Exception;
use App\Traits\HandleResponseApi;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;

class ValidationFailedException extends Exception
{
    use HandleResponseApi;
    protected $exception;

    public function __construct(ValidationException $exception)
    {
        $this->exception = $exception;
        parent::__construct('Validasi gagal. Silakan periksa data input Anda.', 422);
    }

    /**
     * Render the exception into an HTTP response.
     */
    public function render()
    {

        return $this->sendError(
            message: $this->getMessage(),
            code: 422,
            errors: $this->exception->validator->errors()->toArray()
        );
    }
}