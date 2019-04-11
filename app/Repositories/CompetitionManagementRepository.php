<?php
namespace App\Repositories;

use App\Models\CompetitionManagement;
use App\Contracts\Repositories\ICompsRepository;


class CompetitionManagementRepository implements ICompsRepository
{
    public function getAllCompetitions() {
        return CompetitionManagement::all();
    }

    public function updateCompetition($id, array $data) {
        return CompetitionManagement::find($id)->update($data);
    }

    public function findCompetition($id) {
        return CompetitionManagement::find($id);
    }
}
