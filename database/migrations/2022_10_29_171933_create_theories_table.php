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
            
            $table->integer('course')->nullable(); //180
            $table->integer('course-mid')->nullable();//45
            $table->integer('course-ct')->nullable();//45
            $table->integer('course-assignment')->nullable();//15
            $table->integer('course-attendence')->nullable();//15
            
            $table->integer('course1')->nullable(); //180
            $table->integer('course1-mid')->nullable();//45
            $table->integer('course1-ct')->nullable();//45
            $table->integer('course1-assignment')->nullable();//15
            $table->integer('course1-attendence')->nullable();//15

            $table->integer('course2')->nullable(); //180
            $table->integer('course2-mid')->nullable();//45
            $table->integer('course2-ct')->nullable();//45
            $table->integer('course2-assignment')->nullable();//15
            $table->integer('course2-attendence')->nullable();//15
            
            $table->integer('course3')->nullable(); //180
            $table->integer('course3-mid')->nullable();//45
            $table->integer('course3-ct')->nullable();//45
            $table->integer('course3-assignment')->nullable();//15
            $table->integer('course3-attendence')->nullable();//15

            $table->integer('course4')->nullable(); //180
            $table->integer('course4-mid')->nullable();//45
            $table->integer('course4-ct')->nullable();//45
            $table->integer('course4-assignment')->nullable();//15
            $table->integer('course4-attendence')->nullable();//15

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
