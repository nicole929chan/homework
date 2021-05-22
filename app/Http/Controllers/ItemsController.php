<?php

namespace App\Http\Controllers;

use App\Models\Box;
use App\Models\Category;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    /**
     * 遺失物品清單
     *
     * @return void
     */
    public function index()
    {
        $items = Item::all();

        return view('items.index', ['items' => $items]);
    }

    /**
     * 發佈貼文
     *
     * @return void
     */
    public function create() 
    {
        $categories = Category::all();
        $boxes = Box::all();

        return view('items.create', [
            'categories' => $categories,
            'boxes' => $boxes
        ]);
    }

    public function store(Request $request)
    {
        $item = Item::create([
            'category_id' => $request->category_id,
            'box_id' => $request->box_id,
            'place' => $request->place,
            'description' => $request->description,
            'pickup_at' => $request->pickup_at,
            'image01' => $path = $request->file('image01')->store('items')
        ]);

        return redirect(route('item.create'));

    }
}
