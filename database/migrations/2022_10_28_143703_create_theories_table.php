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
            $table->string('course')->nullable();
            $table->string('course1')->nullable();
            $table->string('course2')->nullable();
            $table->string('course3')->nullable();
            $table->string('course4')->nullable();
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
