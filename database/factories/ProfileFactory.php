<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Profile;


class ProfileFactory extends Factory
{
    public function definition(): array
    {
        return [
            'dni' => $this->faker->numerify('##########'),
            'phone_user' => $this->faker->phoneNumber,
            'tel_user' => $this->faker->numerify('#######'),
            'address' => $this->faker->address,
            'birthday' => $this->faker->date,
            'gender' => $this->faker->randomElement(['male', 'female', 'other']),
            'job_title' => $this->faker->jobTitle,
            'tel_job' => $this->faker->numerify('########'),


            'user_id' => User::factory(),
        ];
    }
}
