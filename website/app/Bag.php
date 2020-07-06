<?php

namespace App;

use App\Constants\ItemTypeConst;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin Builder
 */
class Bag extends Model
{
    public function slots()
    {
        return $this->hasMany(
            BagSlot::class,
            'bag_id'
        )
            ;
    }

    public function chestSlots()
    {
        return $this->hasMany(
            BagSlot::class,
            'bag_id',
            'id'
        )
            ->whereIn(
            'item_id',
            Item::where(
                'item_type_id',
                '=',
                ItemType::where('abbr', '=', ItemTypeConst::CHEST)->firstOrFail()->id,
            )->get('id')->toArray()
        )
            ;
    }

    public function runeSlots()
    {
        return $this->hasMany(
            BagSlot::class,
            'bag_id'
        )
            ->whereIn(
                'item_id',
                Item::where(
                    'item_type_id',
                    '=',
                    ItemType::where('abbr', '=', ItemTypeConst::RUNE)->firstOrFail()->id,
                )->get('id')->toArray()
            )
            ;
    }

    public function awardSlots()
    {
        return $this->hasMany(
            BagSlot::class,
            'bag_id',
            'id'
        )
            ->whereIn(
                'item_id',
                Item::where(
                    'item_type_id',
                    '=',
                    ItemType::where('abbr', '=', ItemTypeConst::AWARD)->firstOrFail()->id,
                )->get('id')->toArray()
            )
            ;
    }
}
