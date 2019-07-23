<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeePositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_positions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('emp_id');
            $table->bigInteger('achieve_member')->nullable();
            $table->unsignedBigInteger('position_id')->nullable();
            $table->decimal('achieve_hcp')->nullable();
            $table->decimal('commission')->nullable();
            $table->timestamps();

            $table->foreign('emp_id')->references('id')->on('employees')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('position_id')->references('id')->on('positions')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee_positions');
    }
}
