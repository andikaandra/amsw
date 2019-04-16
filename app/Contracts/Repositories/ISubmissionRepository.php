<?php
namespace App\Contracts\Repositories;


interface ISubmissionRepository {
    public function getAllSubmissions();
    public function acceptSubmission($comp_id);
    public function getSubmissionDetails($id);
}