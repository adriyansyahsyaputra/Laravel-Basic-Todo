<?php

namespace App\Services;

interface UserService
{
    // Logic Login
    function login($user, $password): bool;
}