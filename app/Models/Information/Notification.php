<?php

namespace App\Models\Information;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasUuids;

    protected $guarded = ['id'];

    public function userable()
    {
        return $this->morphTo();
    }
    
}
