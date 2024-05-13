<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PrdVarAttValueMap extends Model
{
    protected $table = 'product_var_att_value_map';
    protected $fillable = ['product_var_id', 'att_value_id'];
    public $timestamps = false;
}
