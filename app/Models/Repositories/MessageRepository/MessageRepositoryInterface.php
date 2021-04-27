<?php

namespace App\Models\Repositories\MessageRepository;

interface MessageRepositoryInterface
{
    public function getAll();

    public function create($request);
}
