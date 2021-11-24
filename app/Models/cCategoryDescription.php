<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cCategoryDescription extends Model
{
    use HasFactory;

    protected $table = 'category_description';
    protected $fillable = ['language_id', 'name', 'description', 'meta_title', 'meta_description'];

    public function category()
    {
        return $this->hasOne('App\Models\Category');
    }
}
