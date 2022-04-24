<?php

namespace App\Http\Actions\Meal\Response;

use App\Models\Category;
use App\Models\Meal;
use App\Models\NutritionalValue;
use Illuminate\Database\Eloquent\Collection;

class MealDTO
{
    public int $id;

    public string $name;

    public string $recipe;

    public string $cookingTime;

    public float $weight;

    public float $price;

    public Category $category;

    public string $image;

    public NutritionalValue $nutritionalValue;

    public function __construct(Meal $data)
    {
        $this->id = $data->id;
        $this->name = $data->name;
        $this->recipe = $data->recipe;
        $this->cookingTime = $data->cooking_time;
        $this->weight = $data->weight;
        $this->price = $data->price;
        $this->category = $data->category;
        $this->nutritionalValue = $data->nutritionalValue;
        $this->image = $data->image;
    }
}
