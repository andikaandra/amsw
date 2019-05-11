<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Competition;
use App\Models\Participant;
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

    public function downloadParticipantFiles($id) {
        try {
            $participant = Participant::find($id);
            if(!$participant)
                return response()->json(['message' => 'not found'], 404);
        } catch (Exception $e) {
            
        }
        return response()->download(storage_path('app') .'/public' . $participant->file_path, $participant->name . '.zip');
    }
    
    public function viewPayment($id) {
        $payment = Payment::find($id);
        if (!$payment)
            return response()->json(['message' => 'not found'], 404);            
        return response()->file(storage_path('app') .'/public/' . $payment->file_path);
    }

    public function getFinalPayment($user_id) {
        $payment = Payment::where('user_id', $user_id)->where('payment_type', 'final')
        ->first();
        $comp = Competition::where('user_id', $user_id)->first();
        return response()->json([$payment, $comp]);
    }

    public function declineFinalRegistration($comp_id) {        
        $comp = Competition::find($comp_id);
        $comp->update([
            'final_verification_status' => 'declined'
        ]);

        $comp->user->update(['status' => 7]);

    }

    public function acceptFinalRegistration($comp_id) {
        $comp = Competition::find($comp_id);
        $comp->update([
            'final_verification_status' => 'verified'
        ]);

        $comp->user->update(['status' => 8]);
        
    }



}