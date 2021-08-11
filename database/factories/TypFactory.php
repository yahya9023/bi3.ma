<?php

namespace Database\Factories;

use App\Models\Typ;
use Illuminate\Database\Eloquent\Factories\Factory;

class TypFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Typ::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->realText(30),
        ];
    }
}
