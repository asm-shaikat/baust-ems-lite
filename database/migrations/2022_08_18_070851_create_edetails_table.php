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
        Schema::create('edetails', function (Blueprint $table) {
            $table->id();
            $table->string('fathersName',255);
            $table->string('mothersName',255);
            $table->bigInteger('nationalID')->unique();
            $table->string('bloodGrp');
            $table->string('previousJob',255);
            $table->date('joiningDate');
            $table->date('leavingDate')->nullable();
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
        Schema::dropIfExists('edetails');
    }
};
