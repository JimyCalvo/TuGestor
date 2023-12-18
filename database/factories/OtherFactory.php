<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Other;
use App\Models\Item;


class OtherFactory extends Factory
{
    protected $model = Other::class;

    public function definition()
    {
        return [
            'model' => $this->faker->word,
            'version' => $this->faker->word,
            'dimension' => $this->faker->randomElement(['small', 'medium', 'large']),
            'weight' => $this->faker->randomFloat(3, 0, 100), // 3 decimal places, min 0, max 100
            'date_exp' => $this->faker->date(),
            'color' => $this->faker->colorName,
            'extra_1' => $this->faker->word,
            'extra_2' => $this->faker->word,
            'extra_3' => $this->faker->numberBetween(0, 1000),
            'extra_4' => $this->faker->numberBetween(0, 1000),
            'extra_5' => $this->faker->randomFloat(2, 0, 100),
            'extra_6' => $this->faker->randomFloat(2, 0, 100),
            'extra_7' => $this->faker->boolean,
            'extra_8' => $this->faker->boolean,
            'extra_9' => $this->faker->text,
            'item_id' => Item::factory(),
        ];
    }
}
