<?php

namespace App\Http\Controllers;

use Log;
use Auth;
use Validator;
use App\Models\Payment;
use App\Models\Competition;
use Illuminate\Http\Request;
use App\Contracts\IParticipantRegistrationManagement;


class ParticipantRegistrationController extends Controller
{
    private $_participantRegistrationService;

    public function __construct(IParticipantRegistrationManagement $service) {
        $this->_participantRegistrationService = $service;
    }

    public function resetData(Request $request) {
      // return $request;
        try {
          $this->_participantRegistrationService->resetData($request->user_id);
        } catch (\Exception $e) {
            $eMessage = 'Reset Data - User: ' . $request->user_id . ', error: ' . $e->getMessage();
            Log::emergency($eMessage);
            return redirect()->back()->with('error', 'Whoops, an  error has accoured. If it persists, please contact the committe!');
        }
        return redirect()->back()->with('success', 'Successfully reset data.'); 
    }

    public function chooseCabang(Request $request) {
    		try {
    			$this->_participantRegistrationService->chooseCabang((array) $request->all());
    		} catch (\Exception $e) {
  	        $eMessage = 'Choose Competition - User: ' . $request->user . ', error: ' . $e->getMessage();
  	        Log::emergency($eMessage);
            return redirect()->back()->with('error', 'Whoops, an  error has accoured. If it persists, please contact the committe!');
  	    }
        return redirect()->back()->with('success', 'Successfully chose competition branch.'); 
    }

    public function uploadData(Request $request) {
      	try {
      		$result = $this->_participantRegistrationService->uploadData((array) $request->all());
        } catch (\Exception $e) {
            $message = 'Upload data: ' . Auth::user()->email . ', error: ' . $e->getMessage();
            Log::emergency($message);
            return redirect()->back()->with('error', $e->getMessage());
        }
        return redirect()->back()->with('success', 'Successfully uploaded registration data.'); 
    }

    public function uploadSubmission(Request $request) {
        try {
          $result = $this->_participantRegistrationService->uploadSubmission((array) $request->all());
        } catch (\Exception $e) {
            $message = 'Upload data: ' . Auth::user()->email . ', error: ' . $e->getMessage();
            Log::emergency($message);
            return redirect()->back()->with('error', $e->getMessage());
        }
        return redirect()->back()->with('success', 'Successfully uploaded submission.'); 
    }

    public function finalRegistration(Request $request) {
        // cannot attend final        
        if($request->can_attend == 'no') {
            Competition::find($request->comp_id)
            ->update([
                'can_go_to_final' => 'no'
            ]);
        } else {
            // return $request->all();
            $validator = Validator::make($request->all(), [
                'nama_pengirim' =>  'required|max:255',
                'jumlah_tf' => 'required|max:10',
                'nama_bank' => 'required|max:255',
                'bukti_pembayaran' => 'required|max:2000|image',
                'comp_id' => 'required',
                'travel_plan' => 'required'
            ]);        
    
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            Competition::find($request->comp_id)
            ->update([
                'can_go_to_final' => 'yes',
                'travel_plan' => $request->travel_plan
            ]);

            Payment::create([
                'competition' => Auth::user()->competition,
                'file_path' => str_replace("public","", $request['bukti_pembayaran']->store('public/payments')),
                'payment_type' => 'final',
                'bank_account_name' => $request->nama_pengirim,
                'bank_name' => $request->nama_bank,
                'amount' => $request->jumlah_tf,
                'user_id' => Auth::user()->id
            ]);

            Auth::user()->update([
                'status' => 7
            ]);
        }
        return redirect('participant')->with('success', 'Succesfully confirmed Final registration.'); 
    }



}
