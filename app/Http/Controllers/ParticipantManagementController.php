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
        return response()->json(['data' => $this->_participantService->getAllTeams($request->competition)]);
    }

    // accept team
    public function acceptParticipant(Request $request) {
        $this->_participantService->acceptParticipant($request->id);
        return response()->json(['message' => 'accepted'], 200);
    }
    // deciline team
    public function declineParticipant(Request $request) {
        $this->_participantService->declineParticipant($request->id);
        return response()->json(['message' => 'declined'], 200);
    }
    // get particiapnts
    public function getParticipantsByCompId($id) {
        return response()->json([$this->_participantService->getParticipantsByCompId($id)]);
    }

}