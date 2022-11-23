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
        Schema::create('arch_courses', function (Blueprint $table) {
            $table->id();
            $table->string('arch_name');
            $table->text('arch_description')->nullable();
            $table->unsignedBigInteger('created_by')->nullable();;
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
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
        Schema::dropIfExists('arch_courses');
    }
};
