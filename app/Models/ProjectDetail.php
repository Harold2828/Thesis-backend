<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        "is_active",
        "data_type",
        "specification_value",
        "specification_id",
        "project_id"
    ];

    public function project(){
        return $this->belongsTo(Project::class);
    }

    public function specification(){
        return $this->belongsTo(Specification::class);
    }

}
