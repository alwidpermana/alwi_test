<?php

namespace App\Repositories;

use App\Interfaces\NotificationReadsRepositoryInterface;
use App\Models\NotificationReads;

class NotificationReadsRepository implements NotificationReadsRepositoryInterface 
{
    public function getAllNotificationReads() 
    {
        return NotificationReads::all();
    }

    public function getNotificationReadsById($id) 
    {
        return NotificationReads::findOrFail($id);
    }
}