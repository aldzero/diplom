<?php

declare(strict_types=1);

namespace App\Domain\Order\UseCases\AddOrder;

class Command
{
    public string $userName;

    public string $userPhone;

    public string $userAddress;

    public string $userAdditionalInfo;

    public array $meals;
}
