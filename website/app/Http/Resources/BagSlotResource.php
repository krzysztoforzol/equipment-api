<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BagSlotResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return array_merge([
            'id' => $this->id,
        ],
            (new ItemResource($this->item))->toArray($request));
    }
}
