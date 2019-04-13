<?php

namespace App\Http\Controllers;

use App\Contracts\IParticipantRegistrationManagement;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Log;

class ParticipantController extends Controller
{
    private $_participantRegistrationService;

    public function __construct(IParticipantRegistrationManagement $service) {
        $this->_participantRegistrationService = $service;
    }

    public function index() {
        return view('pages.participant.index');
    }

    public function registrationPage() {
        //default
        $cabang = 'Essay';
        if (Auth::user()) {
            $cabang = Auth::user()->competition;
        }
    	$listLomba = $this->_participantRegistrationService->getAllLomba();
        $lomba = $this->_participantRegistrationService->getMyLomba($cabang);

        return view('pages.participant.registration', compact('listLomba', 'lomba'));
    }

    public function teamsPage() {
        return view('pages.participant.teams');
    }
}
