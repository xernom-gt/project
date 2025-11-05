<?php

namespace Database\Factories;

use App\Models\Menu;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Addons>
 */
class AddonsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $menu = Menu::inRandomOrder()->first();
        return [
            "menu_id" => $menu->id,
            "name" => fake()->text(10),
            "price" => fake()->numberBetween(0, 10000),
        ];
    }
}
