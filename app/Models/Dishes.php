<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dishes extends Model
{
    use HasFactory;

    protected $table = 'dishes';

    protected $fillable = [
        'name',
        'restaurant_id',
        'description',
        'price',
        'image_url',
    ];

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class,'index');
    }
}
