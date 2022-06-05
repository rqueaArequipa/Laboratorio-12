<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'categoria' => $this->faker->text(),
            'nombre' => $this->faker->text(),
            'descripcion' => $this->faker->text(),
            'precio' => $this->faker->randomFloat(),
            'stock' => $this->faker->biasedNumberBetween(),
            'oferta' => $this->faker->text(),
            'fechavnc' => $this->faker->date(),
            'imagen' => $this->faker->image(),
        ];
    }
}
