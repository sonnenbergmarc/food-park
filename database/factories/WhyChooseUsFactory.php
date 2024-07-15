<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\WhyChooseUs>
 */
class WhyChooseUsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'icon' => 'fas fa-percent',
            'title' => 'Discount Voucher',
            'short_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, debitis expedita .',
            'status' => fake()->boolean()
        ];
    }
}
