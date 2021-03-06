<?php
namespace App\Contracts;

use Illuminate\Http\Request;

interface IParticipantRegistrationManagement {
    public function chooseCabang(array $data);

    public function completeTour($id);

    public function uploadData(array $data);

    public function uploadSubmission(array $data);

    public function resetData($id);

    public function getAllLomba();

    public function getMyLomba($name);
}
?>