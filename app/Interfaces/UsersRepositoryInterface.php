<?php

namespace App\Interfaces;

interface UsersRepositoryInterface 
{
    public function getAllUsers();
    public function getUsersById($id);
}