<?php
namespace App\Services\User;

interface UserInterface
{
    public function login(
        string $identifier, 
        string $credential, 
        string $loginBy = 'email',
        bool $usePassword = true,
        bool $remember = false
    );
}