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
        Schema::create('arch_course_lesson_assignments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('archive_course_id')->comment('FK = archive_courses.id');
            $table->unsignedBigInteger('archive_course_lession_id')->comment('FK = archive_course_lessions.id');
            $table->string('title');
            $table->text('details')->nullable();
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('deleted_by')->nullable();
            $table->tinyInteger('valid')->comment('1=Yes, 0=No');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('arch_course_lesson_assignments');
    }
};
