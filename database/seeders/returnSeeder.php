<?php

namespace Database\Seeders;

use App\Models\Returns;
use Illuminate\Database\Seeder;

class returnSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Returns::factory(9)->create();
    }
}
