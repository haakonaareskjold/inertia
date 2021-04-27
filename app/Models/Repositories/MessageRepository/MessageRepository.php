<?php

namespace App\Models\Repositories\MessageRepository;

use App\Models\Message;
use App\Models\Repositories\BaseRepositoryAbstract;

class MessageRepository extends BaseRepositoryAbstract implements MessageRepositoryInterface
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
