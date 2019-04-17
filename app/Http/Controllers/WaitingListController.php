<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\IParticipantManagement;

class WaitingListController extends Controller
{
    private $_pmService;

    public function __construct(IParticipantManagement $service) {
        $this->_pmService = $service;        
    }

    public function getWaitingList(Request $request) {
        return response()->json(['data' => $this->_pmService->getWaitingList($request->competition)]);
    }
}
