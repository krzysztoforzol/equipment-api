<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin Builder
 */
class Item extends Model
{
    public function attributes()
    {
        return $this->hasMany(
            ItemsAttributes::class,
            'item_id'
        )
            ;
    }

    public function type()
    {
        return $this->belongsTo(
            ItemType::class,
            'item_type_id'
        )
            ;
    }
}
