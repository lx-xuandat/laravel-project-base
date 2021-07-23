<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Eloquent\Repository;
use App\Repositories\Contracts\UserRepositoryInterface;
use App\Models\User;

/** @property User $model */
class UserRepository extends Repository implements UserRepositoryInterface
{
    protected function model()
    {
        return User::class;
    }
}
