<?php

namespace Database\Factories;
use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoomFactory extends Factory
{
    protected $model = Room::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'Tipo de habitacion'=>$this->faker->numberBetween(1,4),
        ];

    }
}
