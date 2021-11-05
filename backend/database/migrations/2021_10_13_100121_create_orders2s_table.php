<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrders2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders2s', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('orderid');
            $table->integer('userid');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('phone');
            $table->string('email');
            $table->string('notes');
            $table->string('address_line1');
            $table->string('address_line2')->nullable();
            $table->string('town_city');
            $table->string('postal_code');
            $table->string('country');
            $table->string('shipping')->nullable();
            $table->string('shipping_agent_name')->nullable();
            $table->string('shipping_agent_url')->nullable();
            $table->string('tracking_id')->nullable();
            $table->string('total');
            $table->string('payment_status');
            $table->string('shipment_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders2s');
    }
}
