<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\products;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\categories>
 */
class categoriesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name_category'=>$this->faker->randomElement(['Niña','Niño','Caballero','Dama']),
            'product_id'=> products::InRandomOrder()->first()->id,
        ];
    }
}
