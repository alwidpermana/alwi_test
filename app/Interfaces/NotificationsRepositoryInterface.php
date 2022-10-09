<?php

namespace App\Interfaces;

interface NotificationsRepositoryInterface 
{
    public function getAllNotifications();
    public function getNotificationsById($id);
}