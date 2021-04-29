<?php

namespace App\Models\Repositories\UserRepository;

use App\Models\Repositories\AbstractBaseRepository;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class UserRepository extends AbstractBaseRepository implements UserRepositoryInterface
{
    public function __construct(protected User $user)
    {
        parent::__construct($user);
    }

    public function getAll(): Collection|array
    {
        return $this->user::all();
    }

    public function getUser($id)
    {
        return $this->user::query()->findOrFail($id);
    }
}
