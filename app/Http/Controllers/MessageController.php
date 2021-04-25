<?php

namespace App\Http\Controllers;


use App\Models\Repositories\MessageRepository\MessageRepositoryInterface;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function __construct(private MessageRepositoryInterface $messageRepository) {}

    public function index(Request $request)
    {
        $messages = $this->messageRepository->getAll();

        if($request->is('api/*')) {
            return response()->json($messages);
        }

        return inertia('Messages', ['messages' => $messages]);
    }
}
