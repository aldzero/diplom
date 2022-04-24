<?php

declare(strict_types=1);

namespace App\Domain\Order\UseCases\AddOrder;

use App\Domain\Order\Queries\OrderQueries;
use App\Models\Order;

class Handler
{
    private OrderQueries $queries;

    public function __construct(OrderQueries $queries)
    {
        $this->queries = $queries;
    }

    public function handle(Command $command): array
    {
        $orders = [];

        foreach ($command->meals as $meal) {
            $order = new Order();
            $order->user_name = $command->userName;
            $order->user_phone = $command->userPhone;
            $order->user_address = $command->userAddress;
            $order->user_additional_info = $command->userAdditionalInfo;
            $order->meal_id = $meal['id'];
            $order->user_id = auth()->user()->id;
            $order->status = 1;

            $this->queries->save($order);

            $orders[] = $order;
        }
        return $orders;
    }
}
