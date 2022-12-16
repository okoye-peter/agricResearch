<?php

namespace Database\Factories;

use App\Models\Specialty;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // dd(is_dir(public_path("/assets/uploads")), array_diff(scandir(public_path("/assets/uploads/images")), array('.', '..')));
        $users_id = User::pluck('id')->all();
        $specialties_id = Specialty::pluck('id')->all();
        return [
            'title' => $this->faker->word,
            'body' => $this->faker->sentence(500),
            'user_id' => $this->faker->randomElement($users_id),
            'specialty_id' => $this->faker->randomElement($specialties_id),
        ];
    }
}
