<?php
namespace App\Services;

use App\Contracts\Repositories\IParticipantRegistrationRepository;
use App\Contracts\IParticipantRegistrationManagement;
use Illuminate\Http\Request;

class ParticipantRegistrationManagement implements IParticipantRegistrationManagement
{
    // this variable holds repository for participant
    private $_participantsRegistration;
    function __construct(IParticipantRegistrationRepository $repo) {
        $this->_participantsRegistration = $repo;
    }

    public function chooseCabang(Request $request) {
        $this->_participantsRegistration->chooseCabang($request);
    }

    public function uploadData(Request $request){
        $this->_participantsRegistration->uploadData($request);
    }
}

?>