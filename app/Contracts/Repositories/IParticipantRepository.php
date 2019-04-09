<?php
namespace App\Contracts\Repositories;

interface ParticipantRepository {
    public function getAllParticipants();
    public function update($id, array $data);
}

?>