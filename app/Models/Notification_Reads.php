<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification_Reads extends Model
{
    use HasFactory;
    protected $table = 'notification_reads';

    protected $fillable = [
    	'id',
        'is_read',
        'notification_id',
        'user_id'
    ];
}
