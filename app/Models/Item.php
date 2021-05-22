<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'box_id',
        'place',
        'image01',
        'description',
        'pickup_at'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function box()
    {
        return $this->belongsTo(Box::class);
    }
}
