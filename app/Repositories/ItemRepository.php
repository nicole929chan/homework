<?php

namespace App\Repositories;

use App\Filters\Filter;
use App\Models\Item;
use App\Repositories\Contracts\IItemRepository;

class ItemRepository implements IItemRepository
{
    protected $item;

    public function __construct(Item $item)
    {
        $this->item = $item;
    }

    /**
     * 遺失物品清單
     *
     * @return void
     */
    public function get()
    {
        $query = $this->filter();

        return $query->get();
    }

    /**
     * 儲存貼文
     *
     * @return void
     */
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
    public function filter()
    {
        $query = $this->item->orderBy('pickup_at', 'desc');

        $query = (new Filter($query))->apply();
        
        // dd($query->toSql());
        
        return $query;
    }
}