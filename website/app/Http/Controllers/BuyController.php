<?php

namespace App\Http\Controllers;

use App\BagSlot;
use App\Http\Resources\BagSlotResource;
use Illuminate\Http\Request;

class BuyController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'bag_id' => 'required|integer|exists:bags,id',
            'item_id' => 'required|integer|exists:items,id'
        ]);

        return new BagSlotResource(BagSlot::create($request->all()));
    }
}
