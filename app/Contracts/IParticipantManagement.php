<?php
namespace App\Contracts;

interface IParticipantManagement {
    public function acceptParticipant($id);
    public function declineParticipant($id);
    public function getAllTeams($competition);
    public function getParticipantsByCompId($id);
}
?>