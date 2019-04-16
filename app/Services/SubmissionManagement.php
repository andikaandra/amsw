<?php
namespace App\Services;

use App\Contracts\ISubmissionManagement;
use App\Contracts\Repositories\ISubmissionRepository;


class SubmissionManagement implements ISubmissionManagement {
    private $_smRepo;

    public function __construct(ISubmissionRepository $repo) {
        $this->_smRepo = $repo;
    }

    public function getAllSubmissions() {
        return $this->_smRepo->getAllSubmissions();
    }

    public function acceptSubmission($comp_id) {
        return $this->_smRepo->acceptSubmission($comp_id);
    }

    public function getSubmissionDetails($id) {
        return $this->_smRepo->getSubmissionDetails($id);
    }
}