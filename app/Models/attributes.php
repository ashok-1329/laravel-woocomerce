<?php

namespace App\Models;
use App\Models\attribute_values;
use App\Models\products;

use Illuminate\Database\Eloquent\Model;

class attributes extends Model
{
    protected $fillable = ['name'];

    public function values()
    {
        return $this->hasMany(attribute_values::class);
    }

    public function products()
    {
        return $this->belongsToMany(products::class, 'product_attributes_map', 'attribute_id', 'product_id');
    }
}
