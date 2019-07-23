<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('positions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('position_name', 100)->unique();
            $table->integer('min_member');
            $table->decimal('min_hcp');
            $table->decimal('commission')->nullable();
            $table->decimal('team_commission')->nullable();
            $table->decimal('life_fund_commission')->nullable();
            $table->decimal('company_profit_share_commission')->nullable();
            $table->string('description')->nullable();
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
        Schema::dropIfExists('positions');
    }
}
