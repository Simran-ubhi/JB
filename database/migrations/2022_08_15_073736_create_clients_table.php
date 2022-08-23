<?php

use App\Models\Employees;
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
            $table->id('clientID');
            $table->string('cname');
            $table->integer('contact');
            $table->unsignedBigInteger('empID')->unsigned(); 
            $table->foreign('empID')->references('empID')->on('employees'); 
            $table->text('ticket');
            $table->string('paid_ticket');
            $table->string('paid_food');
            $table->integer('discount');
            $table->integer('payable_amount');
            $table->string('payment_method');
            $table->string('referrece_ID');
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
