<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductAttributesMapTable extends Migration
{
    public function up()
    {
        Schema::create('product_attributes_map', function (Blueprint $table) {
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('attribute_id');

            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('attribute_id')->references('id')->on('attributes')->onDelete('cascade');

            $table->primary(['product_id', 'attribute_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('product_attributes_map');
    }
}
