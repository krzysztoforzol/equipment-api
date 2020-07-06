<?php

namespace App\Http\Controllers;

use App\Bag;
use App\Http\Resources\BagResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class BagController extends Controller
{
    public function index(Request $request): AnonymousResourceCollection
    {
        $bags = Bag::query();

        $bags = $bags->paginate($request->limit ?? 10);

        return BagResource::collection($bags);
    }

    public function show($id): BagResource
    {
        $bag = Bag::findOrFail($id);

        return BagResource::make($bag);
    }
}
