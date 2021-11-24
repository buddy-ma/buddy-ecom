<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryPath extends Model
{
    use HasFactory;
    protected $table = 'category_path';

    public function category()
                {
                    return $this->belongsTo(Category::class, 'category_id');
                }

}
