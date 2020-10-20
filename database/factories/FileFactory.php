<?php

namespace Database\Factories;

use App\Models\File;
use App\Models\Folder;
use Illuminate\Database\Eloquent\Factories\Factory;

class FileFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = File::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // 'id' => $this->faker->numberBetween($min = 111, $max = 999),
            'folder_id' => Folder::factory(),
            'name' =>$this->faker->sentence($nbWords = 4, $variableNbWords = true),  
            'content' =>$this->faker->paragraph($nbSentences = 3, $variableNbSentences = true)
        ];
    }
}
