<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        "is_active",
        "latitude",
        "longitude",
        "name",
        "description"
    ];

    public function project_details(){
        return $this->hasMany(ProjectDetail::class);
    }
}
