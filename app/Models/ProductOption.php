<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductOption extends Model
{
    use HasFactory;
    protected $table = 'product_option';
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }


    public function productoptionvalue()
    {
        return $this->hasMany(ProductOptionValue::class, 'product_option_id');
    }
}
