<?php

use Illuminate\Database\Seeder;
use App\Models\CompetitionManagement;
use App\Models\User;
use Faker\Factory as Faker;
use App\Models\Competition;
use App\Models\Participant;
use App\Models\Payment;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        
        CompetitionManagement::create([
        	'id' => 1, 'name' => 'Essay', 'waves' => 2, 'current_wave' => 1, 'registration_status' => 'close', 'submission_status' => 'close', 'final_registration_status' => 'close', 'registration_amount' => 150000, 'final_amount' => 150000
        ]);

        CompetitionManagement::create([
        	'id' => 2, 'name' => 'Literature Review', 'waves' => 2, 'current_wave' => 1, 'registration_status' => 'close', 'submission_status' => 'close', 'final_registration_status' => 'close', 'registration_amount' => 150000, 'final_amount' => 150000
        ]);

        CompetitionManagement::create([
        	'id' => 3, 'name' => 'Public Poster', 'waves' => 2, 'current_wave' => 1, 'registration_status' => 'close', 'submission_status' => 'close', 'final_registration_status' => 'close', 'registration_amount' => 150000, 'final_amount' => 150000
        ]);

        CompetitionManagement::create([
        	'id' => 4, 'name' => 'Research Paper', 'waves' => 2, 'current_wave' => 1, 'registration_status' => 'close', 'submission_status' => 'close', 'final_registration_status' => 'close', 'registration_amount' => 150000, 'final_amount' => 150000
        ]);

        CompetitionManagement::create([
        	'id' => 5, 'name' => 'Educational Video', 'waves' => 2, 'current_wave' => 1, 'registration_status' => 'close', 'submission_status' => 'close', 'final_registration_status' => 'close', 'registration_amount' => 150000, 'final_amount' => 150000
        ]);
        
        // participants
         for ($i=0; $i < 10; $i++) {
             $comps = ['Essay', 'Literature Review', 'Public Poster', 'Research Paper', 'Educational Video'];
             $comp_num = mt_rand(0, 4);
             $user = User::create([
                 'name' => $faker->name,
                 'email' => $faker->freeEmail,
                 'password' => bcrypt('secret'),
                 'role' => 'participant',
                 'status' => 1,
                 'email_verification' => 'verified',
                 'email_token' => $faker->ipv6
             ]);

             Payment::create([
                 'competition' => $comps[$comp_num],
                 'file_path' => $faker->address,
                 'payment_type' => 'group',
                 'bank_account_name' => $faker->name,
                 'bank_name' => $faker->company,
                 'amount' =>mt_rand(120000, 155000),
                 'user_id' => $user->id
             ]);
         }

        // admins

        for ($i=0; $i < 10; $i++) { 
            // $comps = ['Essay', 'Literature Review', 'Public Poster', 'Research Paper', 'Educational Video'];
            // $comp_num = mt_rand(0, 4);
            User::create([
                'name' => $faker->name,
                'email' => 'admin' . $i . '@gmail.com',
                'password' => bcrypt('amswyahud2019'),
                'role' => 'admin',
                'status' => 1,
                'email_verification' => 'verified',
                'email_token' => $faker->ipv6
            ]);
        }
        // competition
         for ($i=0; $i < 3; $i++) {
             $comps = ['Essay', 'Literature Review', 'Public Poster', 'Research Paper', 'Educational Video'];
             $comp_num = mt_rand(0, 4);
             $comp = Competition::create([
                 'type' => $comps[$comp_num],
                 'payment_status' => 'unverified',
                 'competition_status' => 'group',
                 'verification_status' => 'unverified',
                 'wave' => 1,
                 'user_id' => ($i+1)
             ]);
            
//             participants
             for ($j=0; $j < 3; $j++) {
                 $comps = ['Essay', 'Literature Review', 'Public Poster', 'Research Paper', 'Educational Video'];
                 $comp_num = mt_rand(0, 4);

                 Participant::create([
                     'name' => $faker->name,
                     'file_path' => $faker->address,
                     'competition_id' => $comp->id
                 ]);
              
             }

         }

      
    }
}
