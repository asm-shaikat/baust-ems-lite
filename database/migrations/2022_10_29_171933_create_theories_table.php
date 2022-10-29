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
        Schema::create('theories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('level_term');
            $table->string('course_type');
            
            $table->string('course')->nullable(); //180
            $table->string('course_mid')->nullable();//45
            $table->string('course_ct')->nullable();//45
            $table->string('course_assignment')->nullable();//15
            $table->string('course_attendence')->nullable();//15
            
            $table->string('course1')->nullable(); //180
            $table->string('course1_mid')->nullable();//45
            $table->string('course1_ct')->nullable();//45
            $table->string('course1_assignment')->nullable();//15
            $table->string('course1_attendence')->nullable();//15

            $table->string('course2')->nullable(); //180
            $table->string('course2_mid')->nullable();//45
            $table->string('course2_ct')->nullable();//45
            $table->string('course2_assignment')->nullable();//15
            $table->string('course2_attendence')->nullable();//15
            
            $table->string('course3')->nullable(); //180
            $table->string('course3_mid')->nullable();//45
            $table->string('course3_ct')->nullable();//45
            $table->string('course3_assignment')->nullable();//15
            $table->string('course3_attendence')->nullable();//15

            $table->string('course4')->nullable(); //180
            $table->string('course4_mid')->nullable();//45
            $table->string('course4_ct')->nullable();//45
            $table->string('course4_assignment')->nullable();//15
            $table->string('course4_attendence')->nullable();//15

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
        Schema::dropIfExists('theories');
    }
};
