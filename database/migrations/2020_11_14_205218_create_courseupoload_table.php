<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseupoloadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courseupoload', function (Blueprint $table) {
            $table->id();
            $table->text('course_title')->unique();
            $table->text('course_subtitle')->unique();
            $table->text('course_description');
            $table->text('course_language');
            $table->text('course_difficulty');
            $table->text('course_category');
            $table->string('course_image');
            $table->string('course_video');
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
        Schema::dropIfExists('courseupoload');
    }
}
