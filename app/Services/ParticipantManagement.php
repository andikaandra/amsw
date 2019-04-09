<?php
namespace App\Services;

use App\Contracts\Repositories\IParticipantRepository;
use App\Contracts\IParticipantManagement;

class ParticipantManagement implements IParticipantManagement
{
    // this variable holds repository for participant
    private $_participants;
    function __construct(IParticipantRepository $repo) {
        $this->_participants = $repo;
    }

    public function acceptParticipant($id) {
        $this->_participants->update($id, ['verfication_status' => 'verified', 
            'payment_status' => 'verified']);
    }

}



?>