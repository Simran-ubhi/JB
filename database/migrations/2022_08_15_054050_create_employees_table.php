<?php

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
        Schema::create('employees', function (Blueprint $table) {
            $table->id('empID');
            $table->text('category');
            $table->text('employee_name');
            $table->biginteger('contact_1')->unique();
            $table->integer('contact_2');
            $table->text('emp_email');
            $table->date('emp_DOB');
            $table->text('Emp_adress');
            $table->text('active_City');
            $table->integer('monthly_customer_target');
            $table->integer('monthly_books_sale_target');
            $table->integer('monthly_sale_target');
            $table->string('emp_password');
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
        Schema::dropIfExists('employees');
    }
};
