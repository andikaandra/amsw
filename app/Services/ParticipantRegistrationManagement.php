<?php
namespace App\Services;

use App\Contracts\Repositories\IParticipantRegistrationRepository;
use App\Contracts\IParticipantRegistrationManagement;

class ParticipantRegistrationManagement implements IParticipantRegistrationManagement
{
    // this variable holds repository for participant
    private $_participantsRegistration;
    function __construct(IParticipantRegistrationRepository $repo) {
        $this->_participantsRegistration = $repo;
    }

    public function updateRegistration($type, array $data) {
    	if ($type == 1) {
	        $this->_participantsRegistration->chooseCabang($data);
    	}
    	elseif ($type == 2) {
    		
    	}
    }

}

?>