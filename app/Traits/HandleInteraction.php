<?php
namespace App\Traits;

use Exception;
use App\Exceptions\HandledException;
use TallStackUi\Traits\Interactions;
use Illuminate\Database\Eloquent\ModelNotFoundException;

trait HandleInteraction
{
    use Interactions;

    public function toastError(Exception|HandledException $e)
    {
        $message = match (true) {
            $e instanceof HandledException => $e->getMessage(),
            $e instanceof ModelNotFoundException => 'Data ' . class_basename($e->getModel()) . ' tidak ditemukan',
            default => 'Terjadi kesalahan sistem',
        };
        return $this->toast()->error('Gagal', $message)->send();
    }
}