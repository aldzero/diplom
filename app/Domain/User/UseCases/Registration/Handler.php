<?php

declare(strict_types=1);

namespace App\Domain\User\UseCases\Registration;

use App\Domain\User\Queries\UserQueries;
use App\Models\User;

class Handler
{
    private UserQueries $queries;

    public function __construct(UserQueries $queries)
    {
        $this->queries = $queries;
    }

    public function handle(Command $command)
    {
        $user = new User();

        $user->name = $command->name;
        $user->email = $command->email;
        $user->password = $command->password;
        $user->api_token = $command->apiToken;

        $this->queries->save($user);

        return $user;
    }
}
