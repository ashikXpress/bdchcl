<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('uid')->nullable();
            $table->string('first_name');
            $table->string('last_name', 10);
            $table->date('dob');
            $table->smallInteger('gender');
            $table->string('house_no', 10)->nullable();
            $table->string('village_or_rood_no', 20);
            $table->string('post_office', 20);
            $table->string('sub_district', 20);
            $table->string('district', 20);
            $table->string('post_code', 6);
            $table->string('nid_or_birth_id', 20)->nullable();
            $table->string('phone_number', 15)->unique();
            $table->string('education_qualification')->nullable();
            $table->string('occupation')->nullable();
            $table->string('email')->nullable();
            $table->unsignedBigInteger('ref_id');
            $table->string('key_id')->nullable();
            $table->string('photo')->nullable();
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
        Schema::dropIfExists('members');
    }
}
