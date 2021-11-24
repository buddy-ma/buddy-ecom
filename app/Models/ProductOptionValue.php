<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductOptionValue extends Model
{
    use HasFactory;
    protected $table = 'product_option_value';
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function productoption()
    {
        return $this->belongsTo(ProductOption::class, 'product_option_id');
    }
}
