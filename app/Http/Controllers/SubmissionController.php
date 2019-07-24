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

    public function getAllSubmissions(Request $request) {
        return response()->json(['data' => $this->_smService->getAllSubmissions($request->competition)]);
    }

    public function acceptSubmission($comp_id) {
        $this->_smService->acceptSubmission($comp_id);
        return response()->json(['message' => 'submission accepted.']);
    }

    public function getSubmissionDetails($id) {
        $submission = $this->_smService->getSubmissionDetails($id);
        return response()->json($submission);
    }

    public function downloadSubmission($id) {
        $submission = $this->_smService->downloadSubmission($id);
        $submissionFilePath = filter_var($submission->file_path, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
        return response()->download(storage_path('app') .'/public/' . $submissionFilePath, $submission->title . '.zip');

    }
}
