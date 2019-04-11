<?php
namespace App\Contracts\Repositories;

interface ICompsRepository {
    public function getAllCompetitions();
    public function updateCompetition($id, array $data);
    public function findCompetition($id);
}

?>