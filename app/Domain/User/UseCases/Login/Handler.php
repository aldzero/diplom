<?php

namespace App\Domain\User\UseCases\Login;

use App\Domain\User\Queries\UserQueries;
use Illuminate\Support\Facades\Hash;

class Handler
{
    private UserQueries $queries;

    public function __construct(UserQueries $queries)
    {
        $this->queries = $queries;
    }

    public function handle(Command $command)
    {
        $user = $this->queries->getByEmail($command->email);

        if (Hash::check($command->password, $user->password)) {
            return $user->api_token;
        }
        return null;
    }
}
