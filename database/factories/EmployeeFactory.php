<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'registration_number'=> $this->faker->numberBetween(),
            'fullname' => $this->faker->name(),
            'depart' => $this->faker->word(),
            'hire_date' =>$this->faker->date(),
            'phone' => $this->faker->numberBetween(),
            'address' => $this->faker->address(),
            'city' => $this->faker->city(),
        ];
    }
}
