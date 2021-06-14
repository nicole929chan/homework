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

    public function getItems()
    {
        $query = $this->filter();

        return $query->get();
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

    /**
     * 搜尋條件
     *
     * @return query builder
     */
    protected function filter()
    {
        $query = $this->item->orderBy('pickup_at', 'desc');

        $filters = request()->only(['category_id', 'place', 'description']);
        $query->where(function ($query) use ($filters) {
            foreach ($filters as $filtered_by => $filter) {
                if ($filter) {
                    if ($filtered_by == 'category_id') {
                        $query->orWhere($filtered_by, $filter);
                    } else {
                        $query->orWhere($filtered_by, 'like', "%{$filter}%");
                    }
                }
            }
        });
        // dd($query->toSql());
        
        return $query;
    }
}