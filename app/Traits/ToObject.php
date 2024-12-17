<?php
namespace App\Traits;

trait ToObject
{
    public function toObject(array $array)
    {
        return json_decode(json_encode($array));
    }
}