<?php

namespace App\Models\Repositories\UserRepository;

use App\Models\Repositories\BaseRepositoryAbstract;
use App\Models\User;

class UserRepository extends BaseRepositoryAbstract implements UserRepositoryInterface
{
    public function __construct(protected User $user)
    {
        parent::__construct($user);
    }

    public function getAll()
    {
        return $this->user::all();
    }

    public function getUser($id)
    {
        return $this->user::query()->findOrFail($id);
    }
}
