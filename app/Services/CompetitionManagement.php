<?php
namespace App\Services;

use App\Contracts\ICompetitionManagement;
use App\Contracts\Repositories\ICompsRepository;

class CompetitionManagement implements ICompetitionManagement
{
    private $_compsRepo;

    public function __construct(ICompsRepository $compsRepo) {
        $this->_compsRepo = $compsRepo;
    }

    public function getAllCompetitions() {
        return $this->_compsRepo->getAllCompetitions();
    }
    
    public function updateCompetition($id, array $data) {
        return $this->_compsRepo->updateCompetition($id, $data);
    }

    public function findCompetition($id) {
        return $this->_compsRepo->findCompetition($id);
    }
   
}

?>