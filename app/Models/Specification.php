<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specification extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "category",
        "alive",
        "observation"
    ];

    public function project_details(){
        return $this->hasMany(ProjectDetail::class);
    }

    public function product_details(){
        return $this->hasMany(ProductDetail::class);
    }
}
