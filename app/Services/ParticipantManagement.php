<?php
namespace App\Services;

use App\Contracts\IParticipantManagement;
use App\Contracts\Repositories\IParticipantRepository;

class ParticipantManagement implements IParticipantManagement
{
    // this variable holds repository for participant
    private $_participants;
    
    public function __construct(IParticipantRepository $participantsRepo) {
        $this->_participants = $participantsRepo;        
    }

    public function acceptParticipant($id) {
        return $this->_participants->acceptTeam($id, ['verification_status' => 'verified', 
            'payment_status' => 'verified']);        
    }

    public function declineParticipant($id) {
        return $this->_participants->declineTeam($id);
    }

    public function getAllTeams($competition) {
        return $this->_participants->getAllEmailVerifiedTeams($competition);
    }

    public function getParticipantsByCompId($id) {
        return $this->_participants->getParticipantsByCompId($id);
    }

    public function getWaitingList($competition) {
        return $this->_participants->getWaitingList($competition);
    }

}



?>