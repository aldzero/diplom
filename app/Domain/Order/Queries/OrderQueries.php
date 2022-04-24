<?php

declare(strict_types=1);

namespace App\Domain\Order\Queries;

use App\Models\Order;

class OrderQueries
{
    public function save(Order $order)
    {
        $order->save();
    }
}
