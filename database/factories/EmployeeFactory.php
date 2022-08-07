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
    public function definition()
    {
        return [
            'Employees' => ucfirst($this->faker->name),
            'Location' => ucfirst($this->faker->address),
            'Email' => $this->faker->unique()->safeEmail,
            'Phone' => $this->faker->phoneNumber,
            'Department' => ucfirst($this->faker->word(4, true)),
            'EmployeeCode' => ucfirst($this->faker->word(4, true)),
            'CustomTags' => 'Development',
            'Positions' => 'Developer',
            'NRC' =>  '12/DaPaNa(N)2003',
            'Manager' => 'testing',
            'ManagerPosition' => 'testing',
            'JoinnedDate' => $this->faker->dateTimeBetween('-30 days', now()),
            'TerminateDate' => $this->faker->dateTimeBetween('-30 days', now())
        ];
    }
}
