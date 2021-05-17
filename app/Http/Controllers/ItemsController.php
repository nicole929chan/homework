<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    /**
     * 失物招領首頁
     *
     * @return void
     */
    public function index()
    {
        return view('items.index');
    }

    /**
     * 發佈貼文
     *
     * @return void
     */
    public function create() 
    {
        return view('items.create');
    }
}
