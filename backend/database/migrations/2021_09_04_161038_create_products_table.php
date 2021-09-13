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
            $table->string("product_subcat");
            $table->string("product_catname");
            $table->string("product_cat_id");
            $table->string("product_subcat_id");
            $table->string("product_userid");
            $table->string("product_name");
            $table->string("product_condition");
            $table->string("product_desc");
            $table->string("product_price");
            $table->string("product_image1");
            $table->string("product_image2")->nullable();
            $table->string("product_image3")->nullable();
            $table->string("product_image4")->nullable();
            $table->string("product_shipping_type");
            $table->string("product_shipping_rate");
            $table->string("product_shipping_cost");
            $table->string("product_package_type");
            $table->string("product_package_weight");
            $table->string("product_package_length");
            $table->string("product_package_width");
            $table->string("product_total");
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
