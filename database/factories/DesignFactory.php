<?php

namespace Database\Factories;

use App\Models\CategoryName;
use App\Models\Color;
use App\Models\Size;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\design>
 */
class DesignFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = User::inRandomOrder()->first();
        $categoryName = CategoryName::with('category')->inRandomOrder()->first();
        $color = Color::inRandomOrder()->first();
        $size = Size::inRandomOrder()->first();
        $createdAt = fake()->dateTimeBetween('-6 months', 'now');
        return [
            'user_id' => $user->id,
            'category_id' => $categoryName->category_id,
            'category_name_id' => $categoryName->id,
            'color_id' => $color->id,
            'size_id' => $size->id,
            'title' => $categoryName->name . ' for ' . $categoryName->category->name,
            'body' => fake()->paragraph(rand(1, 3)),
            'price' => fake()->numberBetween(100, 500),
            'created_at' => Carbon::parse($createdAt),
            'updated_at' => Carbon::parse($createdAt)->addDays(rand(0, 6))->addHours(rand(0, 23))->addMinutes(rand(0, 59)),
        ];
    }
}

