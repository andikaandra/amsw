<?php
namespace App\Contracts\Repositories;

interface IParticipantRepository {
    public function getAllParticipants();
    public function update($id, array $data);
}

?>