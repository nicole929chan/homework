<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Item;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Item::factory(5)->create();
        
        $category = Category::factory()->create();
        Item::factory()->create([
            'category_id' => $category->id
        ]);
    }
}
