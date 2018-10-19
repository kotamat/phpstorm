<?php

namespace App\Repositories;

use App\Contracts\UserInterface;
use App\User;

class UserRepository implements UserInterface
{

    public function get(int $id): User
    {
        return User::find($id);
    }
}
