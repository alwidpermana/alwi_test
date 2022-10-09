<?php

namespace App\Http\Controllers;
use App\Interfaces\UsersRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UsersController extends Controller
{
    private UsersRepositoryInterface $usersRepository;
    
    public function __construct(UsersRepositoryInterface $usersRepository) 
    {
        $this->usersRepository = $usersRepository;
    }
    public function index(): JsonResponse 
    {
        return response()->json([
            'data' => $this->usersRepository->getAllUsers()
        ]);
    }

    public function show(Request $request): JsonResponse 
    {
        $userId = $request->route('id');

        return response()->json([
            'data' => $this->usersRepository->getUsersById($userId)
        ]);
    }
    
}
