<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model

{
    protected $table = 'food';
    protected $fillable = [
        'name',
    ];
    use HasFactory;
}
