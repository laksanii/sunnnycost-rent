<?php

namespace App\services\Impl;
use App\services\UserService;

class UserServiceImpl implements UserService
{
  private array $users = [
    "prazetyo111@gmail.com" => "password"
  ];
  function login(string $email, string $password): bool
  {
    if(!isset($this->users[$email])){
      return false;
    }

    $correctPassword = $this->users[$email];
    return $password == $correctPassword;
    
  }
}