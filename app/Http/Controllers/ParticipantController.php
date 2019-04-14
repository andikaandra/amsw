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
        // return Auth::user();
        $participants = Auth::user()->competitions[0]->participants;
        return view('pages.participant.teams', compact('participants'));
    }

    public function submissionPage() {
        $submission = Auth::user()->submissions;
        $cabang = Auth::user()->competition;
        $lomba = $this->_participantRegistrationService->getMyLomba($cabang);
        return view('pages.participant.submission', compact('lomba', 'submission'));
    }

    public function getCVTemplate() {
        return response()->download(storage_path("app/public/files/curriculum_vitae_template.docx"));
    }

    
}
