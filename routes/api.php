<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\Notifications;
use App\Http\Controllers\NotificationReads;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('users', [UsersController::class, 'index']);
Route::get('users/{id}', [UsersController::class, 'show']);
Route::get('notifications', [Notifications::class, 'index']);
Route::get('notifications/{id}', [Notifications::class, 'show']);
Route::get('notifications_reads', [NotificationReads::class, 'index']);
Route::get('notifications_reads/{id}', [NotificationReads::class, 'show']);
