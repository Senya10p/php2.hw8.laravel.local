<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Book
 * @package App
 */
class Book extends Model
{
    /**
     * @param $query
     * @param $id
     * @return mixed
     */
    public function scopeById($query, $id)
    {
        return $query->where('id', $id)->first();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo('App\Category', 'category_id');
    }
}
