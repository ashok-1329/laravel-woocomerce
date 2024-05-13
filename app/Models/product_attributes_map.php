<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product_attributes_map extends Model
{
    protected $table = 'product_attributes_map';
    protected $fillable = ['product_id', 'attribute_id'];
    public $timestamps = false;
}
