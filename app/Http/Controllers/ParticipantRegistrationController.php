<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\IParticipantRegistrationManagement;
use Log;

class ParticipantRegistrationController extends Controller
{
    private $_participantRegistrationService;

    public function __construct(IParticipantRegistrationManagement $service) {
        $this->_participantRegistrationService = $service;
    }

    public function chooseCabang(Request $request) {
		try {
			$this->_participantRegistrationService->updateRegistration(1, (array) $request->all());
		} catch (\Exception $e) {
	        $eMessage = 'Choose Competition - User: ' . $request->user . ', error: ' . $e->getMessage();
	        Log::emergency($eMessage);
	    	return redirect()->back()->with('error', 'Whoops, something error!'); 
	    }
        return redirect()->back()->with('success', 'Successfully choose competition branch'); 
    }

    public function uploadData(Request $request) {
		try {
			$this->_participantRegistrationService->updateRegistration(1, (array) $request->all());
		} catch (\Exception $e) {
	        $eMessage = 'Choose Competition - User: ' . $request->user . ', error: ' . $e->getMessage();
	        Log::emergency($eMessage);
	    	return redirect()->back()->with('error', 'Whoops, something error!'); 
	    }
        return redirect()->back()->with('success', 'Successfully choose competition branch'); 
    }
}
