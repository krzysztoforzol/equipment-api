<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BagResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'slots' => [
                'chests' => BagSlotResource::collection($this->chestSlots),
                'runes' => BagSlotResource::collection($this->runeSlots),
                'awards' => BagSlotResource::collection($this->awardSlots)
            ]
        ];
    }
}
