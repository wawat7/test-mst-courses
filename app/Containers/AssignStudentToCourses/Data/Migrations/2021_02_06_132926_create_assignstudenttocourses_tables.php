<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAssignstudenttocoursesTables extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('student_courses', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('student_id');
            $table->integer('courses_id');
            $table->timestamps();
            //$table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('student_courses');
    }
}
