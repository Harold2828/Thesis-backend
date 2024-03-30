<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class ProviderFilter extends ApiFilter{

    protected $safeParams = [
        "name"=>["eq"],
        "country"=>["eq"]
    ];

    protected $columnMap = [];

}