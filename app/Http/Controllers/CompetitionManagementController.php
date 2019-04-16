<?php

namespace App\Http\Controllers;

use Log;
use Illuminate\Http\Request;
use App\Contracts\ICompetitionManagement;

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
        try {
            $this->_cmService->updateCompetition($comp_id, $request->only(['waves', 'current_wave', 'registration_status', 'final_registration_status','submission_status', 'registration_amount', 'final_amount']));
        } catch (\Exception $e) {
            // TODO: logging
            return response()->json(['message' => $e->getMessage()], 500);
        }
        return response()->json(['message' => 'succesfully updated competition'], 200);
    }

    public function findCompetition($comp_id) {
        return response()->json($this->_cmService->findCompetition($comp_id));
    }
}
