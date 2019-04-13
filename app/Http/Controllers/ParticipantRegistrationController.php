<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\IParticipantRegistrationManagement;
use Auth;
use Log;

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
            return redirect()->back()->with('error', 'Whoops, something error!'); 
        }
        return redirect()->back()->with('success', 'Successfully reset data'); 
    }

    public function chooseCabang(Request $request) {
    		try {
    			$this->_participantRegistrationService->chooseCabang((array) $request->all());
    		} catch (\Exception $e) {
  	        $eMessage = 'Choose Competition - User: ' . $request->user . ', error: ' . $e->getMessage();
  	        Log::emergency($eMessage);
    	    	return redirect()->back()->with('error', 'Whoops, something error!'); 
  	    }
        return redirect()->back()->with('success', 'Successfully choose competition branch'); 
    }

    public function uploadData(Request $request) {
      	try {
      		$result = $this->_participantRegistrationService->uploadData((array) $request->all());
        } catch (\Exception $e) {
            $message = 'Upload data: ' . Auth::user()->email . ', error: ' . $e->getMessage();
            Log::emergency($message);
            return redirect()->back()->with('error', $e->getMessage());  
        }
        return redirect()->back()->with('success', 'Successfully upload data'); 
    }

    public function uploadSubmission(Request $request) {
        try {
          $result = $this->_participantRegistrationService->uploadSubmission((array) $request->all());
        } catch (\Exception $e) {
            $message = 'Upload data: ' . Auth::user()->email . ', error: ' . $e->getMessage();
            Log::emergency($message);
            return redirect()->back()->with('error', $e->getMessage());  
        }
        return redirect()->back()->with('success', 'Successfully upload submission'); 
    }

}
