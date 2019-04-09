<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\IParticipantManagement;

class ParticipantManagementController extends Controller
{    

    private $_participantService;

    function __construct(IParticipantManagement $service) {
        $_participantService = $service;
    }

    public function acceptParticipant(Request $request) {
        $_participantService->acceptParticipant($request->id);
        return response()->json(['message' => 'accepted'], 200);
    }
}