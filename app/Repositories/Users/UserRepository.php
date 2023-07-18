<?php

namespace App\Repositories\Users;

use App\Models\User;
use App\Interfaces\Users\IUsers;
use App\Repositories\Users\contracts\IUserRepository;

class UserRepository implements IUsers
{

    public function searchCompatiblePeople()
    {
        dd(auth()->user());
    }
}
