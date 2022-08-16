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
        Schema::create('employees', function (Blueprint $table) {
            $table->id('EmpID');
            $table->text('Category');
            $table->text('Employee Name');
            $table->integer('Contact 1');
            $table->integer('Contact 2');
            $table->text('Employee Email');
            $table->date('Emp DOB');
            $table->text('Employee Adress');
            $table->text('ACtive City');
            $table->integer('Monthly Customer Target');
            $table->integer('monthly books sale target');
            $table->integer('Monthly sale target');
            $table->smallInteger('Emp Password')->md5;
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
