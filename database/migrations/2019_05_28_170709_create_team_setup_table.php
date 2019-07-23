<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamSetupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team_setup', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('emp_id');
            $table->unsignedBigInteger('reference_id')->nullable();
            $table->timestamps();

            $table->foreign('emp_id')->references('id')->on('employees');
            $table->foreign('reference_id')->references('id')->on('employees');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('team_setup');
    }
}
