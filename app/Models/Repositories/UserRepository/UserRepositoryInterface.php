<?php


namespace App\Models\Repositories\UserRepository;


interface UserRepositoryInterface
{
    public function getAll();

    public function getUser($id);

}
