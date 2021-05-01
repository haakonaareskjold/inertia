<?php

namespace App\Http\Controllers;

use App\Models\Repositories\UserRepository\UserRepositoryInterface;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(private UserRepositoryInterface $userRepository) {}

    public function index(Request $request)
    {

        $users = $this->userRepository->getAll();

       if($request->is('api/*')) {
           return response()->json($users);
       }

        return inertia('Users', ['users' => $users]);
    }

    public function search(Request $request)
    {
        $query = User::query();

        if ($request->is('search')) {
            $query->where('name', 'LIKE', '%'.$request->get('search').'%');
        }

        return inertia('Search', ['users' => $query->paginate()]);
    }

    public function show($id)
    {
        $data = $this->userRepository->getUser($id);

        return response()->json($data);
    }
}
