<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        "is_active",
        "product_type",
        "model",
        "description",
        "provider_id"
    ];

    public function details(){
        return $this->hasMany(ProductDetail::class);
    }

    public function provider(){
        return $this->belongsTo(Provider::class);
    }
}
