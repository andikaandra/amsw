<?php
namespace App\Contracts\Repositories;

interface IParticipantRepository {
    public function getAllParticipants();
    public function acceptTeam($id, array $data);
    public function declineTeam($id);
    public function getAllEmailVerifiedTeams();
    public function getParticipantsByCompId($id);
}

?>