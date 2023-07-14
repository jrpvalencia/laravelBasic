<?php

namespace Database\Seeders;

use App\Models\pedido;
use Illuminate\Database\Seeder;

class PedidoSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        pedido::factory(20)->create();
    }
}
