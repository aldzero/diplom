<?php

declare(strict_types=1);

namespace App\Http\Actions\Meal;

use App\Domain\Meal\UseCases\Command;
use App\Domain\Meal\UseCases\Handler;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class MealsListAction
{
    public function __invoke(Handler $handler, Request $request): JsonResponse
    {
        $command = new Command();

        $command->search = $request->query('search');
        $command->category = $request->query('category');

        $result = $handler->handle($command);

        return new JsonResponse($result);
    }
}
