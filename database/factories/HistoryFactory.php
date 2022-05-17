<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\History;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\History>
 */
class HistoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 7),
            'tanggal' => $this->faker->date('Y-m-d'),
            'waktu' => $this->faker->time('H:i:s'),
            'lokasi' => $this->faker->address,
            'suhu' => $this->faker->randomFloat(1, 36.1, 37.2),
        ];
    }
}
