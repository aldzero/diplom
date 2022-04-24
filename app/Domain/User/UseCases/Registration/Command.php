<?php

declare(strict_types=1);

namespace App\Domain\User\UseCases\Registration;

class Command
{
    public string $name;

    public string $email;

    public string $password;

    public string $apiToken;
}
