<?php

namespace App\Repositories;

use App\Interfaces\NotificationsRepositoryInterface;
use App\Models\Notifications;

class NotificationsRepository implements NotificationsRepositoryInterface 
{
    public function getAllNotifications() 
    {
        return Notifications::all();
    }

    public function getNotificationsById($id) 
    {
        return Notifications::findOrFail($id);
    }
}