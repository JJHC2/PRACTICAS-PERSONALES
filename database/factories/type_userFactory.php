<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\usuarios;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\type_user>
 */
class type_userFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'type'=>$this->faker->randomElement(['Administrador','Usuario']),
            'users_id'=> usuarios::InRandomOrder()->first()->id,
        ];
    }
}
