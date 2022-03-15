<?php

declare(strict_types=1);

namespace App\Domain\Meal\Queries;

use App\Models\Meal;
use Illuminate\Database\Eloquent\Collection;

class MealQueries
{
    public function all(): Collection
    {
        return Meal::all();
    }
}
