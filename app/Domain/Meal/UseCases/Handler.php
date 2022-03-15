<?php

declare(strict_types=1);

namespace App\Domain\Meal\UseCases;

use App\Domain\Meal\Queries\MealQueries;
use Illuminate\Database\Eloquent\Collection;

class Handler
{
    private $queries;

    public function __construct(MealQueries $queries)
    {
        $this->queries = $queries;
    }


    public function handle(): Collection
    {
        return $this->queries->all();
    }
}
