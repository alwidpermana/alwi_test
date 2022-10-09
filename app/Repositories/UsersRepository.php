<?php

namespace App\Repositories;

use App\Interfaces\UsersRepositoryInterface;
use App\Models\Users;

class UsersRepository implements UsersRepositoryInterface 
{
    public function getAllUsers() 
    {
        return Users::all();
    }

    public function getOrderById($id) 
    {
        return Users::findOrFail($id);
    }
}