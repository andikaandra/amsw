<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Competition extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competition', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->string('type');
            $table->string('payment_status');
            $table->string('verification_status');
            $table->string('competition_status');
            $table->string('can_go_to_final')->default('pending');
            $table->string('final_verification_status')->default('unverified');
            $table->text('travel_plan')->nullable();
            $table->integer('wave');
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
