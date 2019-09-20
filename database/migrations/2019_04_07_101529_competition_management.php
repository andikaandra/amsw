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
            $table->string('final_registration_status');
            $table->decimal('registration_amount', 15, 2);
            $table->decimal('final_amount', 15, 2);

            $table->dateTime('final_wave_1_start')->nullable()->default(null);
            $table->dateTime('final_wave_1_end')->nullable()->default(null);
            $table->dateTime('final_wave_2_start')->nullable()->default(null);
            $table->dateTime('final_wave_2_end')->nullable()->default(null);

            $table->decimal('final_wave_1_amount', 15, 2)->nullable()->default(null);
            $table->decimal('final_wave_2_amount', 15, 2)->nullable()->default(null);

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
