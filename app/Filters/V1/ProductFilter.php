<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class ProductFilter extends ApiFilter{

    protected $safeParams = [
        "providerId"=>["eq"],
        "productType"=>["eq"],
        "model"=>["eq"],
        "description"=>["eq"],
        "id"=>["eq"]
    ];

    protected $columnMap = [
        "productType"=>"product_type",
        "providerId"=>"provider_id"
    ];

}