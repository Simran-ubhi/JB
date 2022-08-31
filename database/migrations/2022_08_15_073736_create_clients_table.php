<?php

use App\Models\Employees;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rules\Unique;

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
            $table->string('pnumber')->unique();
            $table->string('Referredby');
            $table->string('ticket');
            $table->string('paidticket');
            $table->string('paidfood');
            $table->string('discount');
            $table->string('payableamount');
            $table->string('paymentmethod');
            $table->string('referreceID');
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
