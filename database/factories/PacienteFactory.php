<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PacienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombres' =>$this->faker->name(),
            'apellidos' => $this->faker->lastname(),
            'edad' =>$this->faker->randomDigit(3),
            'sexo'=> $this->faker->randomElement(array('M','F','O')),
            'cedula' => $this->faker->numerify(),
            'tipo_sangre' => $this->faker->name(),
            'telefono' => $this->faker->phoneNumber(),
            'correo' => $this->faker->unique()->safeEmail(),
            'direccion' => $this->faker->address(),
        ];
    }
}
