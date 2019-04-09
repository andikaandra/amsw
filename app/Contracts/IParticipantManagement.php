<?php
namespace App\Contracts;

interface IParticipantManagement {
    public function acceptParticipant($id);
    public function declineParticipant($id);
}
?>