<?php

namespace App\Models\Spatie;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasUuids, HasFactory;
    protected $primaryKey = 'uuid';
}
