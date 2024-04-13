<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class ProjectDetailFilter extends ApiFilter{

    protected $safeParams = [
        "id"=>["eq"]
    ];

    protected $columnMap = [

    ];

}