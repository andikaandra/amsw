<?php

use Illuminate\Database\Seeder;
use App\Models\CompetitionManagement;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        CompetitionManagement::create([
        	'id' => 1, 'name' => 'Essay', 'wave' => 2, 'current_wave' => 1, 'registration_status' => 'Close', 'submission_status' => 'Close', 'registration_amount' => 150000, 'final_amount' => 150000
        ]);

        CompetitionManagement::create([
        	'id' => 2, 'name' => 'Literature Review', 'wave' => 2, 'current_wave' => 1, 'registration_status' => 'Close', 'submission_status' => 'Close', 'registration_amount' => 150000, 'final_amount' => 150000
        ]);

        CompetitionManagement::create([
        	'id' => 3, 'name' => 'Poster Publik', 'wave' => 2, 'current_wave' => 1, 'registration_status' => 'Close', 'submission_status' => 'Close', 'registration_amount' => 150000, 'final_amount' => 150000
        ]);

        CompetitionManagement::create([
        	'id' => 4, 'name' => 'Research Paper', 'wave' => 2, 'current_wave' => 1, 'registration_status' => 'Close', 'submission_status' => 'Close', 'registration_amount' => 150000, 'final_amount' => 150000
        ]);

        CompetitionManagement::create([
        	'id' => 5, 'name' => 'Video Edukasi', 'wave' => 2, 'current_wave' => 1, 'registration_status' => 'Close', 'submission_status' => 'Close', 'registration_amount' => 150000, 'final_amount' => 150000
        ]);
    }
}
