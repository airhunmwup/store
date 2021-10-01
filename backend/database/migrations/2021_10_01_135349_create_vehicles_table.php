<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("product_subcat");
            $table->string("product_catname");
            $table->string("product_cat_id");
            $table->string("product_subcat_id");
            $table->string("product_userid");
            $table->string("vehicle_make");
            $table->string("vehicle_model");
            $table->string("vehicle_year");
            $table->string("vehicle_owner_no");
            $table->string("vehicle_price");
            $table->string("vehicle_desc");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicles');
    }
}
