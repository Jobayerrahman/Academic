<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_student', function (Blueprint $table) {
            $table->id();
            $table->string('year');
            $table->string('semester');
            $table->string('result')->nullable();
            $table->integer('course_id')->unsigned();
            $table->integer('student_id')->unsigned();
            $table->foreign('course_id')->references('id')->on('courses')
                ->onDelete('cascade');
            $table->foreign('student_id')->references('id')->on('students')
                ->onDelete('cascade');
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
        Schema::dropIfExists('course_students');
    }
}
