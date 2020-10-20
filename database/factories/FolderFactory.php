<?php

namespace Database\Factories;

use App\Models\Box;
use App\Models\Folder;
use Illuminate\Database\Eloquent\Factories\Factory;

class FolderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Folder::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */


    public function definition()
    {
        return [
            // "id" => $this->faker->numberBetween($min = 111, $max = 999),
            "box_id" => 24,
        ];
    }
}
 