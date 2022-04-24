<?php

namespace App\Domain\User\Queries;

use App\Models\User;

class UserQueries
{
    public function save(User $user)
    {
        $user->save();
    }

    public function getByEmail(string $email)
    {
        return User::query()->get()->where('email', $email)->first();
    }
}
