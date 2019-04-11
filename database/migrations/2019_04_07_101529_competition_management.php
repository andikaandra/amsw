<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CompetitionManagement extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competition_management', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('waves');
            $table->integer('current_wave');
            $table->string('registration_status');
            $table->string('submission_status');
            $table->decimal('registration_amount', 15, 2);
            $table->decimal('final_amount', 15, 2);    
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
