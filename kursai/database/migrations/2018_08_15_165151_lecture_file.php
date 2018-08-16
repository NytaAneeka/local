<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LectureFile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lecture_file', function (Blueprint $table) {
            $table->integer('lecture_id')->unsigned();
            $table->integer('file_id')->unsigned();
            $table->foreign('lecture_id')->references('id')->on('lectures');
            $table->foreign('file_id')->references('id')->on('files');
            $table->rememberToken();
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
        Schema::dropIfExists('lecture_file');
    }
}
