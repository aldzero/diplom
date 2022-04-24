<?php

declare(strict_types=1);

namespace App\Domain\Meal\UseCases;

use App\Domain\Meal\Queries\MealQueries;
use App\Http\Actions\Meal\Response\MealItemsDTO;
use Illuminate\Database\Eloquent\Collection;

class Handler
{
    private MealQueries $queries;

    public function __construct(MealQueries $queries)
    {
        $this->queries = $queries;
    }


    public function handle(Command $command): MealItemsDTO|Collection
    {
        if ($command->category) {
            return $this->queries->filter($command->category);
        }

        if ($command->search) {
            return $this->queries->find($command->search);
        }

        $result = $this->queries->all();

        return new MealItemsDTO($result);
    }
}
