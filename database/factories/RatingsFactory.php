<?php

namespace Database\Factories;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class RatingsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user_ids = User::pluck('id')->all();
        $blog_ids = Blog::pluck('id')->all();
        $rate = [0, 0.5, 1.0, 1.5, 2.0, 2.5, 3.0, 3.5, 4.0, 4.5, 5];
        return [
            'user_id' => $this->faker->randomElement($user_ids),
            'blog_id' => $this->faker->randomElement($blog_ids),
            'rate' => $this->faker->randomElement($rate),
            'comment' => $this->faker->sentence()   
        ];
    }
}
