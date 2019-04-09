<?php
namespace App\Services;

use App\Contracts\IParticipantManagement;
use App\Contracts\Repositories\IParticipantRepository;

class ParticipantManagement implements IParticipantManagement
{
    // this variable holds repository for participant
    private $_participants;
    
    public function __construct(IParticipantRepository $repo) {
        $this->_participants = $repo;
    }

    public function acceptParticipant($id) {
        $_participants->update($id)->update(['verfication_status' => 'verified', 
            'payment_status' => 'verified']);
    }

    public function getAllTeams() {
        return $this->_participants->getAllEmailVerifiedTeams();
    }

}



?>