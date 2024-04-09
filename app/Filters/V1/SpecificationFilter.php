<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class SpecificationFilter extends ApiFilter{

    protected $safeParams = [
        "category"=>["eq"],
        "name"=>["eq"]
    ];

    protected $columnMap = [];

}