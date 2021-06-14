<?php

namespace App\Providers;

use App\Repositories\BoxRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\Contracts\IBoxRepository;
use App\Repositories\Contracts\ICategoryRepository;
use App\Repositories\Contracts\IItemRepository;
use App\Repositories\ItemRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(IItemRepository::class, ItemRepository::class);
        $this->app->bind(ICategoryRepository::class, CategoryRepository::class);
        $this->app->bind(IBoxRepository::class, BoxRepository::class);
    }
}
