<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Log;

class ParticipantController extends Controller
{
    public function index() {
        return view('pages.participant.index');
    }

    public function registrationPage() {
        return view('pages.participant.registration');
    }

    public function chooseCabang(Request $request) {
		try {
	    	$update = User::where('id', $request->user)->update(['status' => 2, 'competition' => $request->competition]);
		} catch (\Exception $e) {
	        $eMessage = 'Choose Competition - User: ' . $request->user . ', error: ' . $e->getMessage();
	        Log::emergency($eMessage);
	    	return redirect()->back()->with('error', 'Whoops, something error!'); 
	    }
        return redirect()->back()->with('success', 'Successfully choose competition branch'); 
    }
}
