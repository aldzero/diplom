<?php

namespace App\Http\Actions\Meal\Response;

use Illuminate\Database\Eloquent\Collection;

class MealItemsDTO
{
    public array $data;

    public function __construct(Collection $data)
    {
        foreach ($data as $meal) {
            $this->data[] = new MealDTO($meal);
        }
    }
}


