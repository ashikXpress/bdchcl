<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('depos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('area_id')->nullable();
            $table->bigInteger('uid')->unique();
            $table->string('depo_name', 150)->unique();
            $table->string('depo_owner_name')->nullable();
            $table->string('depo_owner_phone', 15)->unique()->nullable();
            $table->decimal('purchase_target')->nullable();
            $table->decimal('depo_commission')->nullable();
            $table->string('description')->nullable();
            $table->timestamps();

            $table->foreign('area_id')->references('id')->on('areas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('depos');
    }
}
