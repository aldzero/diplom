<?php

namespace App\Http\Actions\Order;

use App\Domain\Order\UseCases\AddOrder\Command;
use App\Domain\Order\UseCases\AddOrder\Handler;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AddOrderAction
{
    public function __invoke(Request $request, Handler $handler): JsonResponse
    {
        $command = new Command();

        $command->userName = $request->get('userName');
        $command->userPhone = $request->get('userPhone');
        $command->userAddress = $request->get('userAddress');
        $command->meals = (array)$request->get('meals');
        $command->userAdditionalInfo = $request->get('userAdditionalInfo');

        $result = $handler->handle($command);

        return new JsonResponse($result);
    }
}
