<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductAttributesMap extends Model
{
    protected $table = 'product_attributes_map';
    protected $fillable = ['product_id', 'attribute_id'];
}
