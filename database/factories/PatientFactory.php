<?php

namespace Database\Factories;

use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
{
    protected $model = Patient::class;

    public function definition()
    {
    // Added the PHP library faker to generate random patient data
        return [
            'title' => $this->faker->title,
            'first_name' => $this->faker->firstName,
            'surname' => $this->faker->lastName,
            'dob' => $this->faker->date,
            'email' => $this->faker->unique()->safeEmail,
            'mobile_phone' => $this->faker->phoneNumber,
            'address' => $this->faker->address,
            'status' => $this->faker->randomElement(['referred', 'accepted', 'rejected']),
        ];
    }
}