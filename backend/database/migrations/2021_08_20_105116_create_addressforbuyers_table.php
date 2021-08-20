<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressforbuyersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addressforbuyers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('user_id');
            $table->string('country');
            $table->string('fullname');
            $table->string('phonenumber');
            $table->string('address_line1');
            $table->string('address_line2');
            $table->string('town_city');
            $table->string('county');
            $table->string('delivery_instruction');
            $table->string('securitycode_callboxnumber');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addressforbuyers');
    }
}
