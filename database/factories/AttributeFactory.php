<?php

namespace Database\Factories;

use App\Models\Address;
use App\Models\Attribute;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AttributeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Attribute::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $rooms = $this->faker->numberBetween(1, 6);
        $address = Address::factory()->create();

        return [
            'title' => $rooms . ' rooms on ' . $address->street,
            'rooms' => $rooms,
            'address_id' => $address->id,
            'area' => $this->faker->numberBetween(40, 200),
            'unit' => $this->faker->randomElement(['square metres', 'square yards']),
        ];
    }
}
