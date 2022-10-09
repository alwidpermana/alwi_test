<?php

namespace App\Http\Controllers;

use App\Interfaces\NotificationsRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class NotificationsController extends Controller
{
    private NotificationsRepositoryInterface $notificationsRepository;
    
    public function __construct(NotificationsRepositoryInterface $notificationsRepository) 
    {
        $this->notificationsRepository = $notificationsRepository;
    }
    public function index(): JsonResponse 
    {
        return response()->json([
            'data' => $this->notificationsRepository->getAllNotifications()
        ]);
    }

    public function show(Request $request): JsonResponse 
    {
        $userId = $request->route('id');

        return response()->json([
            'data' => $this->notificationsRepository->getNotificationsById($userId)
        ]);
    }
}
