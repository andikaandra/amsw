<?php
namespace App\Contracts;

interface ICompetitionManagement {
    function getAllCompetitions();
    function findCompetition($id);
    function updateCompetition($id, array $data);
    
}