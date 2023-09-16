<?php

namespace Database\Seeders;

use App\Models\TypePay;
use Illuminate\Database\Seeder;

class type_paySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TypePay::factory(13)->create();
    }
}
