<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\categories;
use App\Models\product_variations;
use App\Models\attributes;

class products extends Model
{
    protected $fillable = ['name', 'description', 'price', 'category_id'];

    public function category()
    {
        return $this->belongsTo(categories::class);
    }

    public function variations()
    {
        return $this->hasMany(product_variations::class, 'product_id', 'id');
    }

    public function attributes()
    {
        return $this->belongsToMany(attributes::class, 'product_attributes_map', 'product_id', 'attribute_id');
    }
}
