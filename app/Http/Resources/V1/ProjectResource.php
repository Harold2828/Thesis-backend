<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProjectResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id"=>$this->id,
            "latitude"=>$this->latitude,
            "longitude"=>$this->longitude,
            "name"=>$this->name,
            "description"=>$this->description,
            "details"=>ProjectDetailResource::collection($this->whenLoaded("product_details"))
        ];
    }
}
