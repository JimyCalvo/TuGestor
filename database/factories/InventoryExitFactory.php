<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\InventoryExit;

class InventoryExitFactory extends Factory
{
    protected $model = InventoryExit::class;

    public function definition()
    {
        return [
            'item_id' => \App\Models\Item::factory(),
            'responsible_id' => \App\Models\User::factory(),
            'custody_id' => \App\Models\User::factory(),
            'reason' => $this->faker->sentence
        ];
    }
}
