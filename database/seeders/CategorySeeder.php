<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Gok onumler',
            'Etler',
            'Suyt onumler',
            'Azyk onumleri',
            'Alkogolsyz suwlar',
            'Kosmetika',
            'Cagalar ucin',
            'Oy ucin',
        ];

        foreach ($categories as $category) {
            $obj = new Category();
            $obj->name = $category;
            $obj->save();
        }
    }
}
