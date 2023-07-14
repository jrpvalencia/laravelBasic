<?php

namespace Database\Factories;
use App\Models\producto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    protected $model = Producto::class;
    /**
     * Define the model's default state.
     *  
     * @return array
     */
    public function definition()
    {
        return [
            //
            'nombre'=>$this->faker->sentence(),
            "descripcion"=>$this->faker->paragraph(),
            "imagen"=>$this->faker->randomElement(['img13e2131e2qr1132','pngewf34493r3w9']),
            "precio"=>$this->faker->randomElement(['452434','2434343']),
            "idTemporada"=>$this->faker->randomElement(['243434','43463']),
        ];
    }
}
