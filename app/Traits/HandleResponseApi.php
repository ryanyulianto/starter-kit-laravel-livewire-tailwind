<?php
namespace App\Traits;

use Exception;

use App\Exceptions\HandledException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Database\Eloquent\ModelNotFoundException;

trait HandleResponseApi
{
    public $found_msg = "Terkait Telah Berhasil Didapatkan!";
    public $created_msg = "Terkait Telah Berhasil Dibuat!";
    public $edited_msg = "Terkait Telah Berhasil Diubah!";
    public $notfound_msg = "Terkait Tidak Ditemukan Di Database...";
    public $saved_msg = "Terkait Berhasil Disimpan!";
    public $deleted_msg = "Terkait Berhasil Dihapus!";

    /**
     * success response method.
     *
     * @param string $message
     *
     * @return \Illuminate\Http\Response json()
     */
    public function sendSuccess($message, $title = null)
    {
        $response = [
            'success' => true,
            'title' => $title,
            'message' => $message,
        ];

        return response()->json($response, 200);
    }

    /**
     * success response method with data.
     *
    //  * @param array $data
     * @param string $message
     * @param int $code
     *
     * @return \Illuminate\Http\Response json()
     */
    public function sendResponse(mixed $data, $message, $pagination = null, $code = 200)
    {
        $response = [
            'success' => true,
            'message' => $message,
        ];

        if ($data != null) {
            $response['data'] = $data;
        }
        if ($pagination) {
            $response['pagination'] = $pagination;
        }

        return response()->json($response, $code);
    }


    /**
     * return error response.
     *
     * @param string $message
     * @param array $errors
     * @param int $code
     *
     * @return \Illuminate\Http\Response json()
     */
    public function sendError($message, $errors = [], $code = 404)
    {
        $response = [
            'success' => false,
            'message' => $message,
        ];

        if (!empty($errors)) {
            $response['data'] = $errors;
        }

        return response()->json($response, $code);
    }
    public function sendErrorHandled(Exception|HandledException $e)
    {
        $message = match (true) {
            $e instanceof HandledException => $e->getMessage(),
            $e instanceof ModelNotFoundException => 'Data ' . class_basename($e->getModel()) . ' tidak ditemukan',
            default => 'Terjadi kesalahan sistem',
        };
        $status_code = match (true) {
            $e instanceof HandledException => $e->getCode() ?: 500,
            $e instanceof ModelNotFoundException => 404,
            default => 500,
        };
        $data = $e instanceof HandledException ? $e->getData() : [];
        return $this->sendError($message, $data, $status_code);
    }
    public function mappingResponsePaginate(LengthAwarePaginator $paginate)
    {
        return [
            'total' => $paginate->total(),
            'per_page' => $paginate->perPage(),
            'current_page' => $paginate->currentPage(),
            'last_page' => $paginate->lastPage(),
        ];
    }


}