<?php

namespace App\Http\Controllers;

use App\Models\Category;

class HomeController extends Controller
{
    /**
     * 首頁
     *
     * @return void
     */
    public function action()
    {
        $categories = Category::all();

        return view('home.action', [
            'categories' => $categories
        ]);
    }
}
