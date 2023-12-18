<?php

namespace Database\Factories;

use App\Models\Inventory;
use App\Models\User;
use App\Models\Repository;
use Illuminate\Database\Eloquent\Factories\Factory;

class InventoryFactory extends Factory
{
    protected $model = Inventory::class;

    public function definition()
    {
        return [
            'quantity' => $this->faker->numberBetween(0, 100),
            'inventory_cost' => $this->faker->randomFloat(2, 0, 1000),
            'repository_id'=>Repository::factory(),
            'responsible_id'=>User::factory(),

        ];
    }
}
