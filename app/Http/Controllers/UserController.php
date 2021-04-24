<?php

namespace App\Http\Controllers;

use App\Models\Repositories\UserRepository\UserRepositoryInterface;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(private UserRepositoryInterface $userRepository){}

    public function index()
    {
        $data = $this->userRepository->getAll();

        return response()->json($data);
    }

    public function show($id)
    {
        $data = $this->userRepository->getUser($id);

        return response()->json($data);
    }
}
