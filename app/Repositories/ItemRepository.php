<?php

namespace App\Repositories;

use App\Models\Item;

class ItemRepository
{
    protected $item;

    public function __construct(Item $item)
    {
        $this->item = $item;
    }

    public function get()
    {
        return $this->filter()->get();
    }

    public function set()
    {
        $this->item = $this->item->create([
            'category_id' => request('category_id'),
            'box_id' => request('box_id'),
            'place' => request('place'),
            'description' => request('description'),
            'pickup_at' => request('pickup_at')
        ]);

        if ($file = request()->file('image01')) {
            $path = $file->store('items', 'public');
            $this->item->image01 = $path;
            $this->item->save();
        }
    }

    protected function filter()
    {
        $this->item = $this->item->orderBy('pickup_at', 'desc');

        if ($category_id = request('category_id')) {
            $this->item->where('category_id', $category_id);
        }
        
        if ($place = request('place')) {
            $this->item->orWhere('place', 'like', "%{$place}%");
        }

        if ($description = request('description')) {
            $this->item->orWhere('description', 'like', "%{$description}%");
        }

        return $this->item;
    }
}