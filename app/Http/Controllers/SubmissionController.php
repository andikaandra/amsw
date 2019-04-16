<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\ISubmissionManagement;

class SubmissionController extends Controller
{
    private $_smService;

    public function __construct(ISubmissionManagement $service) {
        $this->_smService = $service;
    }

    public function getAllSubmissions() {
        return response()->json(['data' => $this->_smService->getAllSubmissions()]);
    }

    public function acceptSubmission($comp_id) {
        $this->_smService->acceptSubmission($comp_id);
        return response()->json(['message' => 'submission accepted.']);
    }

    public function getSubmissionDetails($id) {
        $submission = $this->_smService->getSubmissionDetails($id);
        return response()->json($submission);
    }
}
