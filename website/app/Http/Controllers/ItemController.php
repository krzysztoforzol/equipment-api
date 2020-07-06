<?php

namespace App\Http\Controllers;

use App\Http\Resources\ItemResource;
use App\Item;
use App\ItemType;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class ItemController extends Controller
{
    public function index(Request $request): AnonymousResourceCollection
    {
        $this->validate($request, [
            'type_id' => 'filled | integer',
        ]);
        $items = Item::query();

        if ($request->filled('type_id')) {
            $items->where(
                'item_type_id',
                '=',
                ItemType::where('id', '=', strtoupper($request->get('type_id')))->firstOrFail()->id
            );
        }

        $items = $items->paginate($request->limit ?? 10);

        return ItemResource::collection($items);
    }
}
