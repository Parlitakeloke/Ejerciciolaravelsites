<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alumno>
 */
class AlumnoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            "nombre_apellido" => $this->faker->firstName() . " " . $this->faker->lastName(),
            "edad" => $this->faker->numberBetween(18, 60),
            "telefono"=> $this->faker->phoneNumber(),
            "direccion" => $this->faker->address(),
            "foto" => $this->faker->word()
        ];
    }
}
