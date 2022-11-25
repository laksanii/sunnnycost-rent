<?php

namespace App\services;

interface UserService
{
  function login(string $email, string $password): bool;
}