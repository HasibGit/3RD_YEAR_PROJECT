<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'action',
        'arcade',
        'adventure',
        'platformer',
        'puzzle',
        'rpg',
        'racing',
        'strategy',
        'ps4',
        'ps3',
        'xbox_one',
        'xbox_360',
        'pc',
        'nintendo_switch',
        'description',
        'stock',
        'rating',
        'price'
    ];
    
}
