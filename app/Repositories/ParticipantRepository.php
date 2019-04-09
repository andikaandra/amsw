<?php
namespace App\Repositories;

// use required dependencies
use App\Models\Competition;
use App\Models\User;
use App\Contracts\Repositories\IParticipantRepository;

class ParticipantRepository implements IParticipantRepository
{
    public function getAllParticipants() {
        return Competition::all();
    }

    public function update($id, array $data) {
        Competition::find($id)->update($data);
    }

    public function getAllEmailVerifiedTeams() {
        return User::where('email_verification', 'verified')->where('role', 'participant')->get();
    }


}


?>