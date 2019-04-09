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
    // to fill datatables
    public function getAllTeams(Request $request) {
        // return ($this->_participantService);
        return response()->json(['data' => $this->_participantService->getAllTeams()]);
    }

    public function acceptParticipant(Request $request) {
        $_participantService->acceptParticipant($request->id);
        return response()->json(['message' => 'accepted'], 200);
    }
}