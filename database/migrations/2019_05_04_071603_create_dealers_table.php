<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDealersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dealers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('uid')->unique();
            $table->unsignedBigInteger('area_id')->nullable();
            $table->string('dealer_name', 100)->unique();
            $table->string('dealer_owner_name', 100)->nullable();
            $table->string('dealer_owner_phone', 100)->nullable();
            $table->decimal('purchase_target')->nullable();
            $table->decimal('dealer_commission')->nullable();
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
        Schema::dropIfExists('dealers');
    }
}
