<?php
namespace App\Services;

use App\Contracts\ISubmissionManagement;
use App\Contracts\Repositories\ISubmissionRepository;


class SubmissionManagement implements ISubmissionManagement {
    private $_smRepo;

    public function __construct(ISubmissionRepository $repo) {
        $this->_smRepo = $repo;
    }

    public function getAllSubmissions($competition) {
        return $this->_smRepo->getAllSubmissions($competition);
    }

    public function acceptSubmission($comp_id) {
        return $this->_smRepo->acceptSubmission($comp_id);
    }

    public function getSubmissionDetails($id) {
        return $this->_smRepo->getSubmissionDetails($id);
    }

    public function downloadSubmission($id) {
        $submission = $this->_smRepo->getSubmissionDetails($id);
        return $submission;

    }

}