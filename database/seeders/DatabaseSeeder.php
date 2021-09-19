<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	Storage::deleteDirectory('public/category');
        Storage::deleteDirectory('public/subcategories');
        Storage::deleteDirectory('public/products');
        Storage::makeDirectory('public/category');
        Storage::makeDirectory('public/subcategories');
        Storage::makeDirectory('public/products');
        // \App\Models\User::factory(10)->create();

        $this->call(UserSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(SubCategorySeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(ColorSeeder::class);
        $this->call(ColorProductSeeder::class);
        $this->call(SizeSeeder::class);
    }
}
