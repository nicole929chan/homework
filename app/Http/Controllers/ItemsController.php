<?php

namespace App\Http\Controllers;

use App\Http\Requests\Items\ItemStoreRequest;
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
        $items = Item::orderBy('pickup_at', 'desc');

        return view('items.index', ['items' => $items->filter(request()->only('category_id', 'place', 'description'))->get()]);
    }

    /**
     * 發佈貼文表單
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

    /**
     * 儲存貼文
     *
     * @param ItemStoreRequest $request
     * @return void
     */
    public function store(ItemStoreRequest $request)
    {
        $item = Item::create([
            'category_id' => $request->category_id,
            'box_id' => $request->box_id,
            'place' => $request->place,
            'description' => $request->description,
            'pickup_at' => $request->pickup_at
        ]);

        if ($file = $request->file('image01')) {
            $path = $file->store('items', 'public');
            $item->image01 = $path;
            $item->save();
        }

        return redirect(route('item.create'));
    }
}
