<?php
namespace App\Contracts\Repositories;

interface IParticipantRepository {
    public function getAllParticipants();
    public function acceptTeam($id, array $data);
    public function declineTeam($id);
    public function getAllEmailVerifiedTeams($competition);
    public function getParticipantsByCompId($id);
    // public function finalRegistration(array $data);
}

?>