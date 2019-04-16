<?php
namespace App\Contracts\Repositories;


interface ISubmissionRepository {
    public function getAllSubmissions($competition);
    public function acceptSubmission($comp_id);
    public function getSubmissionDetails($id);
}