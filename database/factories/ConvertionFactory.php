<?php

namespace Database\Factories;

use App\Models\Convertion;
use App\Models\Device;
use Illuminate\Database\Eloquent\Factories\Factory;

class ConvertionFactory extends Factory
{
    protected $model = Convertion::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'rate' => $this->faker->randomFloat(3, 0, 1000),
            'device_id_1' => $this->faker->numberBetween(1, Device::count()),
            'device_id_2' => $this->faker->numberBetween(1, Device::count())
        ];
    }
}
