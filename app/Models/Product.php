<?php

namespace App\Models;

use App\Http\Controllers\AdminPanel\AdminProductController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    # many to one
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function  comment()
    {
        return $this->hasMany(Comment::class);
    }
/*
    public function parent()
    {
        return $this->belongsTo(AdminProductController::class,'category_id');
    }

    public function children()
    {
        return $this->hasMany(AdminProductController::class,'category_id');
    }*/

}
