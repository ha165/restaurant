<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PHPUnit\Framework\MockObject\Stub\ReturnSelf;

class Restaurant extends Model
{
    use HasFactory;

    protected $table= 'restaurants';
    protected $fillable = [
        'name',
        'category_id',
        'food_id',
        'price_range',
        'location',
        'rating',
        'description',
        'image_url',
    ];
    public function category()
    {
      return $this->belongsTo(Category::class);
    }
    public function food()
    {
      return $this->belongsTo(Food::class);
    }
}
