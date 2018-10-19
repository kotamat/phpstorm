<?php

namespace App\Contracts;

use App\User;

interface UserInterface
{
    public function get(int $id): User;
}
