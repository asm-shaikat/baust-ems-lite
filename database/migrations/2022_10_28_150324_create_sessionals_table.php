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
        Schema::create('sessionals', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('level_term');
            $table->string('course_type');
            $table->string('sessional')->nullable();
            $table->string('sessional1')->nullable();
            $table->string('sessional2')->nullable();
            $table->string('sessional3')->nullable();
            $table->string('sessional4')->nullable();
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
        Schema::dropIfExists('sessionals');
    }
};
