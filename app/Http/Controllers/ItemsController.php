<?php

namespace App\Http\Controllers;

use App\Http\Requests\Items\ItemStoreRequest;
use App\Repositories\Contracts\IBoxRepository;
use App\Repositories\Contracts\ICategoryRepository;
use App\Repositories\Contracts\IItemRepository;

class ItemsController extends Controller
{
    protected $itemRepo;
    protected $categoryRepo;
    protected $boxRepo;

    public function __construct(IItemRepository $itemRepo, ICategoryRepository $categoryRepo, IBoxRepository $boxRepo)
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
        return view('items.index', ['items' => $this->itemRepo->get()]);
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
        $this->itemRepo->set();

        return redirect(route('item.create'));
    }
}
