<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Item;
use App\Models\User;
use App\Models\ItemList;

class ItemFactory extends Factory
{
    protected $model = Item::class;

    public function definition()
    {
        return [
            'status' => $this->faker->word,
            'comment' => $this->faker->sentence,
            'custody_id'=> User::factory(),
            'item_list_id'=> ItemList::factory(),

        ];
    }
}
