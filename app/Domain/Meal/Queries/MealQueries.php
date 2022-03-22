<?php

declare(strict_types=1);

namespace App\Domain\Meal\Queries;

use App\Models\Category;
use App\Models\Meal;
use Illuminate\Database\Eloquent\Collection;

class MealQueries
{
    public function all(): Collection
    {
        return Meal::all();
    }

    public function filter(string $filter): ?Collection
    {
        return Category::query()->where('name', $filter)->first()->meals ?? null;
    }

    public function find(string $find): ?Collection
    {
        return Meal::query()->where('name', 'LIKE', "%{$find}%")->get();
    }
}
