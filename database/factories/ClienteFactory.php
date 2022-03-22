<?php

namespace Database\Factories;
use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
    protected $model = Cliente::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'Nombre'=>$this->faker->name,
            'Apellido'=>$this->faker->name,
            'Telefono'=>$this->faker->numerify,
            'Cedula'=>$this->faker->numerify('####-')
                .$this->faker->numberbetween(1940,99999)
                .$this->faker->numerify('-#####'),
            'Fecha'=>$this->faker->date
        ];

    }
}
