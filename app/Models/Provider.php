<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;

    protected $fillable = [
        "is_active",
        "country",
        "name"
    ];

    public function products(){
        return $this->hasMany(Product::class);
    }
}
