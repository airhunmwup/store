<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImageuploadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imageuploads', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("product_image1");
            $table->string("product_image2")->nullable();
            $table->string("product_image3")->nullable();
            $table->string("product_image4")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imageuploads');
    }
}
