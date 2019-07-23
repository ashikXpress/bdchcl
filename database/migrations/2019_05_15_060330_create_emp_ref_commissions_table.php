<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpRefCommissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emp_ref_commissions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('emp_id');
            $table->string('emp_ref');
            $table->unsignedBigInteger('position_id');
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
        Schema::dropIfExists('emp_ref_commissions');
    }
}
