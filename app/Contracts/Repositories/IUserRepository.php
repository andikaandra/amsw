<?php
namespace App\Contracts\Repositories;

interface IUserRepository {
    public function updateUser($id, array $data);
}

?>