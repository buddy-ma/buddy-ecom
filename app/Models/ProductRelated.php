<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductRelated extends Model
{
    use HasFactory;
    protected $table = 'product_related';
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
