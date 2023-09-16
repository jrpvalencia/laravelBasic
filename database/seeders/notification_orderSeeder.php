<?php

namespace Database\Seeders;

use App\Models\NotificationOrder;
use Illuminate\Database\Seeder;

class notification_orderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        NotificationOrder::factory(8)->create();
    }
}
