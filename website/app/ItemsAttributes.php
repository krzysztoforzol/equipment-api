<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin Builder
 */
class ItemsAttributes extends Model
{
    public function type()
    {
        return $this->hasOne(
            Attribute::class,
            'id',
            'attribute_id'
        )
            ;
    }
}
