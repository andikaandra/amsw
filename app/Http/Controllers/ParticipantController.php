<?php

namespace App\Http\Controllers;

use Log;
use Auth;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\CompetitionManagement;
use App\Contracts\IParticipantRegistrationManagement;

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

    public function finishTour(Request $request) {
        $this->_participantRegistrationService->completeTour(Auth::user()->id);
        return response()->json(['message' => $user], 200);
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

    public function verifyEmail($hash) {
        try {
            $user = User::where('email_token', $hash)->first();
            if (!$user)
                return "Not found";
            $user->update(['email_verification' => 'verified']);
        } catch (Exception $e) {
            Log::emergency('In email verification ' . $hash . ' ' . $e->getMessage());
            return $e->getException();
            return;
        }
        return redirect('participant')->with('email_verified', 'Your e-mail has been verified!');
    }

    public function finalRegistration(Request $request) {
        $waiting_list_open = CompetitionManagement::where('name', Auth::user()->competition)->first()->final_registration_status;
        
        if($waiting_list_open == 'close') {
            return redirect('participant')->with('waiting_list_close', 'Sorry, final registration is still closed. Please wait. Contact the committee for details.');
        }

        if($request->page == 2)
            return view('pages.participant.final-registration-2');       
        else
            return view('pages.participant.final-registration');
    }

    
}
