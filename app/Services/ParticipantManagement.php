<?php

use App\Contracts\Repositories\IParticipantRepository;

class ParticipantManagement implements IParticipantManagement
{
    // this variable holds repository for participant
    private $_participants;
    function __construct(IParticipantRepository $repo) {
        $_participants = $repo;
    }

    public function acceptParticipant($id) {
        $_participants->update($id)->update(['verfication_status' => 'verified', 
            'payment_status' => 'verified']);
    }

}



?>