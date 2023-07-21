<?php

namespace Database\Seeders;

use App\Models\producto;
use Illuminate\Database\Seeder;

class ProductoSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        producto::factory(20)->create();
    }
}
