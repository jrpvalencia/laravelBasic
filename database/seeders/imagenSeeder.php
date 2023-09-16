<?php

namespace Database\Seeders;

use App\Models\Image;
use Illuminate\Database\Seeder;

class imagenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Image::factory(6)->create();
    }
}
