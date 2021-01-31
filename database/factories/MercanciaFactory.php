<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Mercancia;
use Facade\Ignition\Support\FakeComposer;

class MercanciaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Mercancia::class; //RECUERDA CAMBIARLO POR EL MODELO QUE ESTAS OCUPANDO

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        //PARA MAS FORMATOS
        //  https://github.com/fzaninotto/Faker#formatters
        return [
            'matricula'=>$this->faker->bothify('???-###-?'),
            'conductor'=>$this->faker->firstNameMale,
            'destino'=>$this->faker->city,
            'tara'=>$this->faker->randomFloat($nbMaxDecimals = 5, $min = 0, $max = 10),
            'bascula'=>$this->faker->randomFloat($nbMaxDecimals = 5, $min = 0, $max = 10),
            'pesototal'=>$this->faker->randomFloat($nbMaxDecimals = 5, $min = 0, $max = 10)
        ];
    }
}
