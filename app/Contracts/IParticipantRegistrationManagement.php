<?php
namespace App\Contracts;

use Illuminate\Http\Request;

interface IParticipantRegistrationManagement {
    public function chooseCabang(array $data);

    public function uploadData(array $data);
}
?>