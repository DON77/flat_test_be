<?php

namespace Database\Factories;

use App\Models\Attribute;
use App\Models\Flat;
use App\Models\Relationship;
use Illuminate\Database\Eloquent\Factories\Factory;

class FlatFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Flat::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'type' => $this->faker->randomElement(['flat', 'house']),
            'attribute_id' => Attribute::factory()->create()->id,
            'relationship_id' => Relationship::factory()->create()->id
        ];
    }
}
