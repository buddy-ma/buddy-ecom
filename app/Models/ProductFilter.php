<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductFilter extends Model
{
    use HasFactory;
    protected $table = 'product_filter';
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
