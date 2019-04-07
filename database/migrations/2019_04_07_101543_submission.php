<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Submission extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submission', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('competition_id')->unsigned();
            $table->bigInteger('competition_user_id')->unsigned();
            $table->string('title');
            $table->longText('description');
            $table->string('file_path');
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
        //
    }
}
