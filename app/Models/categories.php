<?php

namespace App\Models;
use App\Models\products;

use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    protected $fillable = ['name', 'description'];

    public function products()
    {
        return $this->hasMany(products::class);
    }
}
