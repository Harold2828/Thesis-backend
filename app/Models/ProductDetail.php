<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        "is_active",
        "data_type",
        "specification_value",
        "specification_id",
        "product_id"
    ];

    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function specification(){
        return $this->belongsTo(Specification::class);
    }
}
