<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    
    protected $model = User::class;
     
    public function definition()
    {
        return [
            'first_name' => $this->faker->unique()->firstName($gender = 'male'|'female'),
            'last_name' => $this->faker->unique()->lastName(),
            'age' => $this->faker->numberBetween($min = 18, $max = 60),
            'gender' => $this->faker->randomElement(['M', 'F']),
            'country' => $this->faker->country(),
            'phone_number' => $this->faker->unique()->tollFreePhoneNumber(),
            'email' => $this->faker->unique()->freeEmail()
        ];
    }
}
 