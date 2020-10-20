<?php

namespace Database\Seeders;

use App\Models\File;
use App\Models\Folder;
use App\Models\Shelf;
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
        // \App\Models\User::factory(10)->create();
        // Shelf::factory()->times(6)->hasBoxes(4)->create();
        // File::factory()->times(352)->create();
        Folder::factory()->times(10)->hasFiles(7)->create();
        //     return ['folder_id' => $folder->id];
        // })->create();
        
    }
}
