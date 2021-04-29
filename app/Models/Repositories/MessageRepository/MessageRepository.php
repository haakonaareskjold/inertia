<?php

namespace App\Models\Repositories\MessageRepository;

use App\Models\Message;
use App\Models\Repositories\AbstractBaseRepository;

class MessageRepository extends AbstractBaseRepository implements MessageRepositoryInterface
{

    public function __construct(protected Message $message)
    {
        parent::__construct($message);
    }

    public function getAll()
    {
        return $this->message::all();
    }

    public function create($request)
    {
        return $this->message::query()->create($request);
    }
}
