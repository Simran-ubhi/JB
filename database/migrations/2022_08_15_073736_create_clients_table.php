<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id('cname');
            $table->id('contact');
            $table->id('referred_by');
            $table->id('ticket');
            $table->id('paid_ticket');
            $table->id('paid_food');
            $table->id('discount');
            $table->id('payable_amount');
            $table->id('payment_method');
            $table->id('referrece_ID');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
};
