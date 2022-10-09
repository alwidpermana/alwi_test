<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use DB;
class AlwiController extends Controller
{
    public function index()
    {
        // $data = Users::join('notifications', 'notifications.user_id', '=', 'users.id')
        //       		->leftjoin('notification_reads', 'notification_reads.notification_id', '=', 'notifications.id')
        //       		->get(['users.name', 'notifications.category', 'notifications.title','notifications.description','notifications.created_at','notification_reads.is_read','notification_reads.created_at as read_at']);
        $data = DB::select("SELECT
                                name,
                                category,
                                title,
                                description,
                                notifications.created_at,
                                is_read,
                                notification_reads.created_at as read_at
                            FROM
                                users
                            INNER JOIN
                                notifications on users.id = notifications.user_id OR notifications.user_id IS NULL
                            LEFT JOIN
                                notification_reads on notifications.id = notification_reads.notification_id AND users.id = notification_reads.user_id
                            WHERE
                                name = 'diki'");
        return view('index', compact('data'));
    }
}
