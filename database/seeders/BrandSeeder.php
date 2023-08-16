<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [
            'Mahmal',
            'Emin Et',
            'Elin',
            'Tomus',
            'Pepsi',
            'Nivea',
            'NAN',
            'Belet film',
            'Coca Cola',
            'Alpen Gold',
        ];

        foreach ($brands as $brand) {
            $obj = new Brand();
            $obj->name = $brand;
            $obj->save();
        }
    }

}
