<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('payment', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::table('competition', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::table('submission', function (Blueprint $table) {
            $table->foreign('competition_id')->references('id')->on('competition');
            $table->foreign('competition_user_id')->references('user_id')->on('competition');
        });

        Schema::table('participant', function (Blueprint $table) {
            $table->foreign('competition_id')->references('id')->on('competition');
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
