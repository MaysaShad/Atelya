<?php

namespace Database\Seeders;

use App\Models\Color;
use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $objs = [
            'White',
            'Pink',
            'Yellow',
            'Green',
            'Blue',
            'Orange',
            'Gray',
        ];

        foreach ($objs as $obj) {
            Color::create([
                'name' => $obj,
            ]);
        }
    }
}
