<?php

namespace Database\Seeders;

use App\Models\Season;
use Illuminate\Database\Seeder;

class seasonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Season::factory(14)->create();
    }
}
