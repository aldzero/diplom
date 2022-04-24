<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class NutritionalValue extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'proteins', 'fats', 'carbs'];

    protected $hidden = ['created_at', 'updated_at', 'meal_id'];

    public function meal(): BelongsTo
    {
        return $this->belongsTo(Meal::class);
    }
}
