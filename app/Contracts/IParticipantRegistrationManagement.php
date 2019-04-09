<?php
namespace App\Contracts;

use Illuminate\Http\Request;

interface IParticipantRegistrationManagement {
    public function chooseCabang(Request $request);

    public function uploadData(Request $request);
}
?>