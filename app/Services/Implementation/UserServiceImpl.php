<?php

namespace App\Services\Implementation;

use App\Services\UserService;

class UserServiceImpl implements UserService
{   

    private array $users = [
        "Adriyansyah" => "rahasia"
    ];

    // Implement Logic Login
    function login($user, $password): bool
    {
        if(!isset($this->users[$user])) {
            return false;
        }

        $correctPassword = $this->users[$user];
        return $password == $correctPassword;
    }
}