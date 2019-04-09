<?php
namespace App\Contracts\Repositories;

use Illuminate\Http\Request;

interface IParticipantRegistrationRepository {
    public function chooseCabang(Request $request);

    public function uploadData(Request $request);
}

?>