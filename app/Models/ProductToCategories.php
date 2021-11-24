<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductToCategories extends Model
{
    use HasFactory;

    protected $table = 'product_to_category';
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function productcategory()
    {
        return $this->belongsTo(ProductCategory::class, 'category_id');
    }
}
