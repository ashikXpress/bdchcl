<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_sales', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('emp_id')->nullable();
            $table->string('position')->nullable();
            $table->integer('achieve_member')->nullable();
            $table->decimal('total_payment')->nullable();
            $table->decimal('achieve_hcp')->nullable();
            $table->decimal('hcp_commission')->nullable();
            $table->decimal('due_payment')->nullable();
            $table->decimal('withdraw_payment')->nullable();
            $table->timestamps();

            $table->foreign('emp_id')->references('id')->on('employees')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee_sales');
    }
}
