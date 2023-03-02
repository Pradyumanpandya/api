<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use \App\Models\Model\Product as model;
use \App\Models\Model\Review as models;
use Carbon\Factory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Model\Product::factory(50)->create();

        \App\Models\Model\Review::factory(300)->create();

        // \app\Models\Model\Product::factory()->count(50)->create();
        // \app\Models\Model\Review::factory()->count(300)->create();
    }
}
