<?php

namespace App\Http\Controllers;

use App\Http\Requests\Items\ItemStoreRequest;
use App\Models\Box;
use App\Models\Category;
use App\Models\Item;
use App\Repositories\BoxRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\ItemRepository;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    protected $itemRepo;
    protected $categoryRepo;
    protected $boxRepo;

    public function __construct(ItemRepository $itemRepo, CategoryRepository $categoryRepo, BoxRepository $boxRepo)
    {
        $this->itemRepo = $itemRepo;
        $this->categoryRepo = $categoryRepo;
        $this->boxRepo = $boxRepo;
    }

    /**
     * 遺失物品清單
     *
     * @return void
     */
    public function index()
    {
        return view('items.index', ['items' => $this->itemRepo->getItems()]);
    }

    /**
     * 發佈貼文表單
     *
     * @return void
     */
    public function create() 
    {
        return view('items.create', [
            'categories' => $this->categoryRepo->get(),
            'boxes' => $this->boxRepo->get()
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
        $this->itemRepo->setItem();

        return redirect(route('item.create'));
    }
}
