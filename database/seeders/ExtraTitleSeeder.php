<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExtraTitleSeeder extends Seeder
{
    public function run()
    {
        DB::table('extra_title')->insert([
            [
                'extra_name' => 'extra_1',
                'type' => 'string',
                'title' => '',
            ],
            [
                'extra_name' => 'extra_2',
                'type' => 'string',
                'title' => '',
            ],
            [
                'extra_name' => 'extra_3',
                'type' => 'integer',
                'title' => '',
            ],
            [
                'extra_name' => 'extra_4',
                'type' => 'integer',
                'title' => '',
            ],
            [
                'extra_name' => 'extra_5',
                'type' => 'double',
                'title' => '',
            ],
            [
                'extra_name' => 'extra_6',
                'type' => 'double',
                'title' => '',
            ],
            [
                'extra_name' => 'extra_7',
                'type' => 'boolean',
                'title' => '',
            ],
            [
                'extra_name' => 'extra_8',
                'type' => 'boolean',
                'title' => '',
            ],
            [
                'extra_name' => 'extra_9',
                'type' => 'text',
                'title' => '',
            ],

        ]);
    }
}
