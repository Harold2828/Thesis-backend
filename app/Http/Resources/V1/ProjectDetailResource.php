<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProjectDetailResource extends JsonResource
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
            "specificationValue"=>$this->specification_value,
            "dataType"=>$this->data_type,
            "projectId"=>$this->project_id,
            "specificationId"=>$this->specification_id
        ];
    }
}
