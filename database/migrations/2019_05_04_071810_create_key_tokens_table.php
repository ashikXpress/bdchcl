<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKeyTokensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('key_tokens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('ref_id');
            $table->string('key_id');
            $table->smallInteger('has_use')->nullable();
            $table->string('member_uid')->nullable();
            $table->string('created_by')->nullable();
            $table->timestamps();

            $table->foreign('ref_id')->references('id')->on('employees')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('key_tokens');
    }
}
