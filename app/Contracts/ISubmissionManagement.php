<?php
namespace App\Contracts;


interface ISubmissionManagement {
    public function getAllSubmissions();
    public function acceptSubmission($comp_id);
    public function getSubmissionDetails($id);
}