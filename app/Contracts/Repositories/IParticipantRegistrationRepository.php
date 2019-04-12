<?php
namespace App\Contracts\Repositories;

use Illuminate\Http\Request;

interface IParticipantRegistrationRepository {
    public function chooseCabang($id, $competition);

    public function newCompetition($id, $type);

    public function changeStatus($id, $status);

    public function newParticipant($id, $name, $path);

    public function newPayment(array $data);
}

?>