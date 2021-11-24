<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'product';

    public function productdescription()
    {
        return $this->hasMany(ProductDescription::class, 'product_id');
    }

    public function productfilter()
    {
        return $this->hasMany(ProductFilter::class, 'product_id');
    }


    public function productoption()
    {
        return $this->hasMany(ProductOption::class, 'product_id');
    }

    public function productoptionvalue()
    {
        return $this->hasMany(ProductOptionValue::class, 'product_id');
    }


    public function productimage()
    {
        return $this->hasMany(ProductImage::class, 'product_id');
    }
}
