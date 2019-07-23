<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('uid');
            $table->unsignedBigInteger('area_id')->nullable();
            $table->string('first_name');
            $table->string('last_name', 10);
            $table->date('dob');
            $table->smallInteger('gender');
            $table->unsignedBigInteger('department_id')->nullable();
            $table->unsignedBigInteger('upline_id')->nullable();
            $table->string('house_no', 10)->nullable();
            $table->string('village_or_rood_no', 20);
            $table->string('post_office', 20);
            $table->string('sub_district', 20);
            $table->string('district', 20);
            $table->string('post_code', 6);
            $table->string('nid_or_birth_id', 20)->nullable()->unique();
            $table->string('phone_number', 15)->nullable();
            $table->string('education_qualification_ssc')->nullable();
            $table->string('education_qualification_hsc')->nullable();
            $table->string('education_qualification_hons')->nullable();
            $table->string('education_qualification_msc')->nullable();
            $table->string('education_qualification_others')->nullable();
            $table->string('email')->nullable();
            $table->string('password')->nullable();
            $table->string('photo');
            $table->timestamps();

            $table->foreign('area_id')->references('id')->on('areas')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('CASCADE')->onUpdate('CASCADE');
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
}
