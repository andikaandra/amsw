<?php
namespace App\Repositories;

// use required dependencies
use App\Models\User;
use App\Contracts\Repositories\IParticipantRegistrationRepository;

class ParticipantRegistrationRepository implements IParticipantRegistrationRepository
{
    public function chooseCabang(array $data) {
		User::where('id', $data['user'])->update(['status' => 2, 'competition' => $data['competition']]);
    }
}

?>