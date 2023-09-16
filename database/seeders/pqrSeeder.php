<?php

namespace Database\Seeders;

use App\Models\PQR;
use Illuminate\Database\Seeder;

class pqrSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PQR::factory(20)->create();
    }
}
