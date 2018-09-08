<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function scopeById($query, $id)
    {
        return $query->where('id', $id)->first();
    }
}
