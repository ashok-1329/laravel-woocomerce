<?php

namespace App\Models;
use App\Models\products;
use App\Models\attribute_values;
use App\Models\PrdVarAttValueMap;

use Illuminate\Database\Eloquent\Model;

class product_variations extends Model
{
    protected $fillable = ['product_id', 'price_adjustment', 'stock'];

    public function product()
    {
        return $this->belongsTo(products::class);
    }

    public function attributes()
    {
        return $this->belongsToMany(PrdVarAttValueMap::class, 'product_variations','product_var_id', 'id',);
    }
}
