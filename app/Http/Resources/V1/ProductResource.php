<?php

namespace App\Http\Resources\V1;

use App\Models\ProductDetail;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "productType" => $this->product_type,
            "model" => $this->model,
            "providerId" => $this->provider_id,
            "description" => $this->description,
            "details"=>ProductDetailResource::collection($this->whenLoaded("product_details"))
        ];
    }
}
