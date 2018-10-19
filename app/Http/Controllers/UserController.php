<?php

namespace App\Http\Controllers;

class UserController extends Controller
{





    public function get()
    {
        /** @var \App\User $user1 */
        $user1 = \App\User::first();

        $user1->getKey();





        $user2 = \App\User::first();
        assert($user2 instanceof \App\User);

        $user2->getKey();
    }
}
