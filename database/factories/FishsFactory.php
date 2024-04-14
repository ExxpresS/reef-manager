<?php

namespace Database\Factories;

use App\Models\Fishs;
use App\Models\Tanks;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<Fishs>
 */
class FishsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Fishs::class;

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

            'name' => $this->faker->name(),

            'date_add' => $this->faker->dateTime(),

        ];
    }
}