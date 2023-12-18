<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\InventoryEntry;

class InventoryEntryFactory extends Factory
{
    protected $model = InventoryEntry::class;

    public function definition()
    {
        return [
            'item_id' => \App\Models\Item::factory(),
            'responsible_id' => \App\Models\User::factory(),
            'custody_id' => \App\Models\User::factory()
        ];
    }
}
