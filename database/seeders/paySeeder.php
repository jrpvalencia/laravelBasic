<?php

namespace Database\Seeders;

use App\Models\Pay;
use Illuminate\Database\Seeder;

class paySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pay::factory(16)->create();
    }
}
