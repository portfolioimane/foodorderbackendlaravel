<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Menu extends Model
{
    protected $fillable = ['category_id', 'name', 'price', 'image', 'isAvailable'];

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
