<?php
namespace App\Repositories;

use App\Contracts\Repositories\ISubmissionRepository;
use App\Models\User;
use App\Models\Competition;
use App\Models\Submission;

class SubmissionRepository implements ISubmissionRepository {
    public function getAllSubmissions($competition) {
        $submissions = User::where('competition', $competition)->whereHas('submissions')->with('submissions.competition')->get();
        return $submissions;
    }

    public function acceptSubmission($comp_id) {
        $comp = Competition::find($comp_id);
        $comp->update(['competition_status' => 'final']);
        return $comp->user->update(['status' => 6]);
    }

    public function getSubmissionDetails($id) {
        return Submission::find($id);
    }
}