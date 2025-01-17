<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
    /** @use HasFactory<\Database\Factories\BasketFactory> */
    use HasFactory;

    protected $fillable = [
        'date',
        'item_id',
        'user_id',
    ];
}
