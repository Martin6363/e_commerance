<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Attribute>
 */
class AttributeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'type' => 'color',
        ];
    }
    public function ram()
    {
        return $this->state([
            'name' => 'RAM',
            'type' => 'ram',
        ]);
    }

    public function color()
    {
        return $this->state([
            'name' => 'Color',
            'type' => 'color',
        ]);
    }

    public function size()
    {
        return $this->state([
            'name' => 'Size',
            'type' => 'string',
        ]);
    }
}
