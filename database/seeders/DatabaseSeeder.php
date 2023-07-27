<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            BrandSeeder::class,
            CategorySeeder::class,
        ]);
        \App\Models\User::factory(100)->create();
        \App\Models\Product::factory(800)->create();
    }
}
