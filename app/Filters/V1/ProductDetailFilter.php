<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class ProductDetailFilter extends ApiFilter{

    protected $safeParams = [
        "specificationValue"=>["eq"],
        "specificationId"=>["eq"],
        "dataType"=>["eq"],
        "productId"=>["eq"]
    ];

    protected $columnMap = [
        "specificationValue"=>"specification_value",
        "specificationId"=>"specification_id",
        "dataType"=>"data_type",
        "productId"=>"product_id"
    ];

}