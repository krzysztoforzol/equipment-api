<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ItemResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request): array
    {
        return [
          'id' => $this->id,
          'name' => $this->name,
          'item_type' => $this->type->name,
          'attributes' => ItemsAttributesResource::collection($this->attributes)
        ];
    }
}
