<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("product_subcat");
            $table->string("product_catname");
            $table->string("product_cat_id");
            $table->string("product_subcat_id");
            $table->string("product_userid");
            $table->string("property_name");
            $table->string("property_price");
            $table->string("property_type");
            $table->string("property_bedroom_no");
            $table->string("property_bathroom_no");
            $table->string("property_desc");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
}
