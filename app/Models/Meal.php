<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    use HasFactory;

    protected $table = 'meals';

    protected $fillable = [
        'name',
        'category_id',
        'recipe',
        'price',
        'proteins',
        'fats',
        'carbs',
        'image'
    ];

    protected $hidden = ['created_at', 'updated_at'];
}
