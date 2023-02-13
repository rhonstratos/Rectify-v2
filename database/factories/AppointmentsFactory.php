<?php

namespace Database\Factories;

use App\Models\Appointments;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Appointments>
 */
class AppointmentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'string_id' => Appointments::generateStringId(),
            'user_id' => 2,
            'date' => now(),
            'alt_contact' => fake()->phoneNumber(),
            'info' => 'test',
            'status' => 0
        ];
    }
}
