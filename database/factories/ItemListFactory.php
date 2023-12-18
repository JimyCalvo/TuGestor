<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ItemList;
use App\Models\Inventory;
use App\Models\Category;
use App\Models\Manufacturer;
use App\Models\Supplier;

class ItemListFactory extends Factory
{
    protected $model = ItemList::class;

    public function definition()
    {
        return [
            'name_item' => $this->faker->words(3, true),
            'quantity' => $this->faker->numberBetween(0, 100),
            'value' => $this->faker->randomFloat(2, 0, 1000),
            'description' => $this->faker->sentence,
            'category_id' => Category::factory(),
            'manufacturer_id' => Manufacturer::factory(),
            'supplier_id' => Supplier::factory(),
            'inventory_id' => Inventory::factory(),
        ];
    }
}
