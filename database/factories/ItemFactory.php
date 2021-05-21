<?php

namespace Database\Factories;

use App\Models\Box;
use App\Models\Category;
use App\Models\Item;
use Faker\Provider\DateTime;
use Illuminate\Database\Eloquent\Factories\Factory;

class ItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Item::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => Category::factory(),
            'box_id' => Box::factory(),
            'place' => $this->faker->address(),
            'image01' => $this->faker->imageUrl(),
            'description' => $this->faker->sentence(),
            'pickup_at' => $this->faker->dateTime(),
            'finished_at' => null
        ];
    }
}
