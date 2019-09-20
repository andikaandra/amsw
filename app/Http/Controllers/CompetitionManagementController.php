<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use DateTime;
use Illuminate\Support\Facades\Date;
use Log;
use Illuminate\Http\Request;
use App\Contracts\ICompetitionManagement;
use Auth;

class CompetitionManagementController extends Controller
{
    private $_cmService;

    public function __construct(ICompetitionManagement $cmService) {
        $this->_cmService = $cmService;
    }

    public function getAllCompetitions() {
        return response()->json(['data' => $this->_cmService->getAllCompetitions()]);
    }
    
    // 'name', 'waves', 'current_wave', 'registration_status',
    // 'submission_status', 'registration_amount', 'final_amount'
    
    public function updateCompetition(Request $request, $comp_id) {
        $wave1Start = DateTime::createFromFormat('m/d/Y H:i', $request->final_wave_1_start_datepicker . ' ' . $request->final_wave_1_start_timepicker);
        $wave1End = DateTime::createFromFormat('m/d/Y H:i', $request->final_wave_1_end_datepicker . ' ' . $request->final_wave_1_end_timepicker);

        $wave2Start = DateTime::createFromFormat('m/d/Y H:i', $request->final_wave_2_start_datepicker . ' ' . $request->final_wave_2_start_timepicker);
        $wave2End = DateTime::createFromFormat('m/d/Y H:i', $request->final_wave_2_end_datepicker . ' ' . $request->final_wave_2_end_timepicker);

        $compData = $request->only(['waves', 'current_wave', 'registration_status', 'final_registration_status','submission_status', 'registration_amount', 'final_amount', 'final_amount_wave_1', 'final_amount_wave_2']);

        $compData['final_wave_1_start'] = $wave1Start->format('Y-m-d H:i:s');
        $compData['final_wave_1_end'] = $wave1End->format('Y-m-d H:i:s');

        $compData['final_wave_2_start'] = $wave2Start->format('Y-m-d H:i:s');
        $compData['final_wave_2_end'] = $wave2End->format('Y-m-d H:i:s');

        unset($compData['final_wave_1_start_datepicker']);
        unset($compData['final_wave_1_end_datepicker']);

        unset($compData['final_wave_2_start_datepicker']);
        unset($compData['final_wave_2_end_datepicker']);

        unset($compData['final_wave_1_start_timepicker']);
        unset($compData['final_wave_1_end_timepicker']);

        unset($compData['final_wave_2_start_timepicker']);
        unset($compData['final_wave_2_end_timepicker']);


        try {
            $this->_cmService->updateCompetition($comp_id, $compData);
        } catch (\Exception $e) {
            Log::emergency('Update competition: User Id: ' . Auth::user()->id . ', email: ' . Auth::user()->email . ' Error: ' . $e->getMessage());
            return response()->json(['message' => $e->getMessage()], 500);
        }
        return response()->json(['message' => 'succesfully updated competition'], 200);
    }

    public function findCompetition($comp_id) {
        return response()->json($this->_cmService->findCompetition($comp_id));
    }
}
