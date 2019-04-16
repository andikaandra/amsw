<?php
namespace App\Contracts;


interface ISubmissionManagement {
    public function getAllSubmissions($competition);
    public function acceptSubmission($comp_id);
    public function getSubmissionDetails($id);
    public function downloadSubmission($id);
}