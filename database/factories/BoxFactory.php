<?php

namespace Database\Factories;

use App\Models\Box;
use App\Models\Shelf;
use Illuminate\Database\Eloquent\Factories\Factory;

class BoxFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Box::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // "id" => $this->faker->numberBetween($min = 111, $max = 999),
            'shelf_id' => Shelf::factory(),
        ];
    }
}
