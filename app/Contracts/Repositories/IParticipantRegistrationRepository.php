<?php
namespace App\Contracts\Repositories;

use Illuminate\Http\Request;

interface IParticipantRegistrationRepository {
    public function chooseCabang($id, $competition);

    public function newCompetition($id, $type);

    public function changeStatus($id, $status);

    public function newParticipant($id, $name, $path);

    public function newPayment(array $data);

    public function resetData($id);

    public function getAllLomba();

    public function checkCabangOpen($competition);

    public function checkCabangSubmissionOpen($competition);

    public function getMyLomba($name);

    public function changeUniversity($id, $university);

    public function newSubmission(array $data);
    
}

?>