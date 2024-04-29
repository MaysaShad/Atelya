<?php

namespace Database\Seeders;

use App\Models\CategoryName;
use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoryNameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $objs = [    
            ['name' => 'Wedding Dresses', 'names' => [
                'Sheath', 'Mermaid', 'Princess', 'A-line', 'Ball gown',  
            ]],
            ['name' => 'Dresses', 'names' => [
                'Cocktail', 'Ball gown', 'Maxi ', 'Midi ', 'Wrap', 'Sundress', 'Bodycon ', 'Shift',
            ]],
            ['name' => 'Skirts', 'names' => [
                'A-line skirt', 'Circle skirt', 'Pencil skirt', 'Wrap skirt', 'Asymmetrical', 'Maxi skirt', 'Tiered skirt', 'Bubble skirt', 'High-waisted skirt',
            ]],
            ['name' => 'Jackets', 'names' => [
                'Denim ', 'Bomber', 'Leather', 'Parka',
            ]],
            ['name' => 'Hats', 'names' => [
                'Floppy Hat', 'Bucket Hat', 'Beanie', 'Trapper Hat',
            ]],
        ];

        foreach ($objs as $obj) {
            $category = Category::create([
                'name' => $obj['name'],
            ]);

            foreach ($obj['names'] as $name) {
                CategoryName::create([
                    'category_id' => $category->id,
                    'name' => $name,
                ]);
            }
        }
    }
}
