<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ItemHistory;
use Illuminate\Support\Str;

class ItemHistoryFactory extends Factory
{
    protected $model = ItemHistory::class;

    public function definition()
    {
        return [
            'item_id' => \App\Models\Item::factory(), // Asume que tienes un factory para Item
            'responsible_id' => \App\Models\User::factory(), // Asume que tienes un factory para User
            'custody_id' => \App\Models\User::factory(), // Asume que tienes un factory para User
            'created_at' => $this->faker->dateTime,
        ];
    }
}
