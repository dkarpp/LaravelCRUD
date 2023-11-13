<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use Faker\Factory;

class SeedProducts extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::query()->delete();
        $faker = Factory::create();

        foreach(range(1, 30) as $number){
            Product::create([
                'name' => $faker->firstName,
                'price' => $faker->randomFloat(2, 10, 300),
                'description' => $faker->sentence(),
                'item_number' => $faker->randomNumber(5, true),
                'image' => $faker->imageUrl(640, 480, 'animals', true)
            ]);
        }
        //'name', 'price', 'description', 'item_number', 'image'
        //php artisan db:seed

    }
}
