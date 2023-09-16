<?php

namespace Database\Seeders;

use App\Models\ShoppingCart;
use Illuminate\Database\Seeder;

class shopping_cartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ShoppingCart::factory(17)->create();
    }
}
