<?php

namespace App\Models\Spatie;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Permission extends Model
{
    use HasUuids, HasFactory;
    protected $primaryKey = 'uuid';
}
