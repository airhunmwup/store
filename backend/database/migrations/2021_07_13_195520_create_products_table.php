<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("product_name");
            $table->string("product_image1");
            $table->string("product_image2");
            $table->string("product_image3");
            $table->string("product_image4");
            $table->string("product_image5");
            $table->string("product_price");
            $table->string("product_condition");
            $table->string("product_brand");
            $table->string("product_location");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
