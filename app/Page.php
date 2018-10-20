<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Page
 * @package App
 */
class Page extends Model
{
    /**
     * @param $query
     * @param $alias
     * @return mixed
     */
    public function scopeByAlias($query, $alias)
    {
        return $query->where('alias', $alias)->first();
    }
}
