<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('dept');
            $table->integer('dept_id');
            $table->integer('batch');
            $table->integer('level');
            $table->integer('term');
            $table->string('f_name');
            $table->string('f_phone');
            $table->string('m_name');
            $table->string('m_phone');
            $table->date('b_date');
            $table->bigInteger('b_id');
            $table->string('religion');
            $table->string('gender');
            $table->string('blood');
            $table->string('s_phone');
            $table->string('permanent_address');
            $table->string('present_address');
            $table->string('email');
            $table->string('password');
            $table->integer('active')->default(1);
            $table->string('user_type');
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
        Schema::dropIfExists('students');
    }
};
