<?php

namespace Database\Factories;

use App\Models\Tanks;
use App\Models\Tests;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<Tests>
 */
class TestsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tests::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        static $index = 0;
        $index += 1;
        return [

            'ph' => $this->faker->randomFloat(1,6,9),

            'kh' => $this->faker->randomFloat(1,5,14),

            'ca' => $this->faker->numberBetween(300,500),

            'mg' => $this->faker->numberBetween(1100,1500),

            'temperature' => $this->faker->randomFloat(1,22,29),

            'densite' => $this->faker->numberBetween(1020,1030),

            'nitrate' => $this->faker->randomFloat(2,0,20),

            'phosphate' => $this->faker->randomFloat(2,0,5),

            'tanks_id' => 1
        ];
    }
}
