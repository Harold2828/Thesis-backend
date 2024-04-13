<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class ProjectFilter extends ApiFilter{

    protected $safeParams = [
        "latitude"=>["eq","lt","gt","lte","gte"],
        "longitude"=>["eq","lt","gt","lte","gte"],
        "name"=>["eq"],
        "description"=>["eq"],
        "id"=>["eq"]
    ];

    protected $columnMap = [

    ];

}