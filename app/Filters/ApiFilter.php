<?php

namespace App\Filters;

use Illuminate\Http\Request;

class ApiFilter {

    protected $safeParams = [];

    protected $columnMap = [];

    protected $operatorMap = [
        'eq'=>'=',
        'lt'=>'<',
        'lte'=>'<=',
        'gt'=>'>',
        'gte'=>'>=',
        'ne'=>'!='
    ];

    public function transform(Request $request){

        $eloQuery = [];

        forEach($this->safeParams as $param => $operators){

            $query = $request->query($param);

            if(!isset($query)){
                continue;
            }

            $column =  $this->columnMap[$param] ?? $param;

            forEach($operators as $operator){
                
                if(isset($query[$operator])){

                    $eloQuery[] =  [$column, $this->operatorMap[$operator], $query[$operator]];
                }
            }
        }

        return $eloQuery;
    }

}

?>