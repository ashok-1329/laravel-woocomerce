<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductVariationAttributesValueMapTable extends Migration
{
    public function up()
    {
        Schema::create('product_var_att_value_map', function (Blueprint $table) {
            $table->unsignedBigInteger('product_var_id');
            $table->unsignedBigInteger('att_value_id');

            $table->foreign('product_var_id')->references('id')->on('product_variations')->onDelete('cascade');
            $table->foreign('att_value_id')->references('id')->on('attribute_values')->onDelete('cascade');

            $table->primary(['product_var_id', 'att_value_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('product_var_att_value_map');
    }
}
