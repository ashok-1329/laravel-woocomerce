<?php
namespace App\Models;
use App\Models\attributes;
use App\Models\product_variations;

use Illuminate\Database\Eloquent\Model;

class attribute_values extends Model
{
    protected $fillable = ['attribute_id', 'value'];

    public function attribute()
    {
        return $this->belongsTo(attributes::class);
    }

    public function variations()
    {
        return $this->belongsToMany(product_variations::class, 'product_variation_attributes_value_map', 'attribute_value_id', 'product_variation_id');
    }
}
