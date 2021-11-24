<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cCategory extends Model
{
    use HasFactory;
    protected $table = 'category';
    protected $primaryKey = 'category_id';

    protected $fillable = ['image', 'parent_id', 'top', 'column', 'status'];

    public function producttocategory()
    {
        return $this->hasMany(ProductToCategory::class, 'category_id');
    }

    public function category_description()
    {
        return $this->hasMany(CategoryDescription::class, 'category_id');
    }

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }

    public function scopeSelection($query)
    {
        return $query->where('status', 1)
        ->leftJoin('category_description', 'category.category_id', '=', 'category_description.category_id')
        ->where([
            'category_description.language_id' => 1,
            'category.parent_id' => 149,
            'category.status' => 1
        ])->get();
    }

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id', 'category_id');
    }

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }
}
