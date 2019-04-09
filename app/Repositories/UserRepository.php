<?php
namespace App\Repositories;

use App\Contracts\Repositories\IUserRepository;

class UserRepository implements IUserRepository{
    public function update($id, array $data) {
        User::find($id)->update($data);
    }
}

?>