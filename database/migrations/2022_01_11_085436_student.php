<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Student extends Migration
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
            $table->string('first_name');
            $table->string('last_name');
            $table->integer('age');
            $table->string('class');
            $table->string('birth_day');
            $table->string('adress');
            $table->string('gender');
            $table->string('religion');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('uid');
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
}
