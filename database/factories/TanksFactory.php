<?php

namespace Database\Factories;

use App\Models\Corals;
use App\Models\Fishs;
use App\Models\Tanks;
use App\Models\Tests;
use App\Models\User;
use App\Models\Users;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<Tanks>
 */
class TanksFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tanks::class;

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

            'litre' => $this->faker->numberBetween(50, 2000),

            'title' => $this->faker->name,

            'date_add' => $this->faker->dateTime,

            'users_id' => 1,
        ];
    }
}
