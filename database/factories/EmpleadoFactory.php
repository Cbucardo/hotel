<?php

namespace Database\Factories;
use App\Models\Empleado;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmpleadoFactory extends Factory
{
    protected $model = Empleado::class;
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
            'Telefono'=>$this->faker->numerify('####-')
                .$this->faker->numberbetween(0000,9999)
                .$this->faker->numerify('-####'),
            'Hora de trabajo'=>$this->faker->numberBetween(0,24)
        ];

    }
}
