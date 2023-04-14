<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\products;
use App\Models\usuarios;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\inventories>
 */
class inventoriesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'status'=>$this->faker->randomElement(['DISPONIBLE','NO DISPONIBLE']),
            'product_id'=> products::InRandomOrder()->first()->id,
            'usuario_id'=>usuarios::InRandomOrder()->first()->id,
        ];
    }
}
