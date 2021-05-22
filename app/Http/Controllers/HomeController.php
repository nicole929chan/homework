<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * 首頁
     *
     * @return void
     */
    public function action()
    {
        return view('home.action');
    }
}
