<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin Builder
 */
class BagSlot extends Model
{
    protected $fillable = [
        'bag_id',
        'item_id',
    ];

    public function item()
    {
        return $this->hasOne(
            Item::class,
            'id',
            'item_id'
        )
            ;
    }
}
