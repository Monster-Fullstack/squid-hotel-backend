<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Room;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $rooms = Room::factory(100)->create();
        Product::factory(200)->create();
        $users = User::factory(100)->create();

        foreach ($users as $user) {
            $products_ids = [];
            $products_ids[] = Product::all()->random()->id;
            $products_ids[] = Product::all()->random()->id;
            $user->products()->sync($products_ids);
        };

        foreach ($rooms as $room) {
            $products_ids = [];
            $products_ids[] = Product::all()->random()->id;
            $products_ids[] = Product::all()->random()->id;
            $products_ids[] = Product::all()->random()->id;
            $products_ids[] = Product::all()->random()->id;
            $room->products()->sync($products_ids);
        }
    }
}
