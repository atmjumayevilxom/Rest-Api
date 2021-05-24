<?php

namespace Database\Factories;

use App\Models\DeskList;
use Illuminate\Database\Eloquent\Factories\Factory;

class DeskListFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DeskList::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' =>  $this->faker->name,
            'desk_id' => $this->faker->numberBetween(1, 5)
        ];
    }
}
