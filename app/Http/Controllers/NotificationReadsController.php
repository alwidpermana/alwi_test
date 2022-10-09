<?php

namespace App\Http\Controllers;
use App\Interfaces\NotificationReadsRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class NotificationReadsController extends Controller
{
    private NotificationReadsRepositoryInterface $notificationReadsRepository;
    
    public function __construct(NotificationReadsRepositoryInterface $notificationReadsRepository) 
    {
        $this->notificationReadsRepository = $notificationReadsRepository;
    }
    public function index(): JsonResponse 
    {
        return response()->json([
            'data' => $this->notificationReadsRepository->getAllNotificationReads()
        ]);
    }

    public function show(Request $request): JsonResponse 
    {
        $userId = $request->route('id');

        return response()->json([
            'data' => $this->notificationReadsRepository->getNotificationReadsById($userId)
        ]);
    }
}
