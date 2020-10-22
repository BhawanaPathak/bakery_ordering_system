<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['category_id', 'name', 'price', 'image', 'quantity','status', 'created_by', 'updated_by'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
