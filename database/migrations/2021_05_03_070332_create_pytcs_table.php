<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePytcsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pytcs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('mavzu');
            $table->string('mavzu_title');
            $table->string('Video');
            $table->string('video_title');
            $table->string('kod');
            $table->string('kod_title');
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
        Schema::dropIfExists('pytcs');
    }
}
