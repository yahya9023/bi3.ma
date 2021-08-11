<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->realText(30),
            'description' =>$this->faker->Text(),
            'price' => $this->faker->numberBetween(5, 10),
            'old_price' => $this->faker->numberBetween(5, 10),
            'image' => $this->faker->imageUrl(30),
            'quantite' => $this->faker->numberBetween(5, 10),
            'size' => $this->faker->faker->hexColor(),
            'color' => $this->faker->realText(5),
            'unstock' => $this->faker->boolean(),
        ];
    }
}
