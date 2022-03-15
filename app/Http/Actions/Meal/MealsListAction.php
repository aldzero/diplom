<?php

declare(strict_types=1);

namespace App\Http\Actions\Meal;

use App\Domain\Meal\UseCases\Handler;
use Illuminate\Http\JsonResponse;

class MealsListAction
{
    public function __invoke(Handler $handler): JsonResponse
    {
        $result = $handler->handle();

        return new JsonResponse($result->toArray());
    }
}
