<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_schedules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('teacher_id')->constrained('teachers','id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('course_id')->constrained('courses','id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('grade_id')->constrained('grades','id')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamp('time');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_schedules');
    }
}
