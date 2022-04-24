<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_name',
        'user_phone',
        'user_address',
        'user_additional_info',
        'count',
        'user_id',
        'meal_id',
        'status',
        'closed_at'
    ];

    use HasFactory;
}
