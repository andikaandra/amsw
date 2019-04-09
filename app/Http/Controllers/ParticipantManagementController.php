<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\IParticipantManagement;

class ParticipantManagementController extends Controller
{    

    private $_participantService;

    public function __construct(IParticipantManagement $service) {
        $this->_participantService = $service;
    }

    public function acceptParticipant(Request $request) {
        $this->_participantService->acceptParticipant($request->id);
        return response()->json(['message' => 'accepted'], 200);
    }

}