<?php

namespace App\Interfaces;

interface NotificationReadsRepositoryInterface 
{
    public function getAllNotificationReads();
    public function getNotificationReadsById($id);
}