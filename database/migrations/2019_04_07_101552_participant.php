<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Participant extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participant', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('competition_id')->unsigned();
            $table->string('name');
            $table->string('cv_path');
            $table->string('foto_path');
            $table->string('ktp_path');
            $table->string('ktm_path');
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
