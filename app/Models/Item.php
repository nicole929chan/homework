<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
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

    public function scopeFilter(Builder $query, array $filters)
    {
        $query->when($filters['category_id'] ?? false, function ($query, $category_id) {
            $query->where('category_id', $category_id);
        });

        $query->when($filters['place'] ?? false, function ($query, $place) {
            $query->orWhere('place', 'like', "%{$place}%");
        });

        $query->when($filters['description'] ?? false, function ($query, $description) {
            $query->orWhere('description', 'like', "%{$description}%");
        });
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function box()
    {
        return $this->belongsTo(Box::class);
    }
}
