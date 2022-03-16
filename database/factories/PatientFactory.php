<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'name' => $this->faker->name(),
            'address' =>  $this->faker->address(),
            'email' =>  $this->faker->email(),
            'phone' =>  $this->faker->phoneNumber(),
            'hospital_id' => rand(1, 20)
            //
        ];
    }
}
