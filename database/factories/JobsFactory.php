<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Jobs>
 */
class JobsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return 
        [
            'name'=>fake()->company(),
            'job_title'=>fake()->sentence(),
            'location'=> fake()->city(),
            'category'=>'Web Development',
            'experience'=>fake()->randomDigitNot(0),
            'job_type'=>'Full Time',
            'qualification'=>'Graduate',
            'gender'=>'male',
            'yearly_salary'=>fake()->randomNumber(),
            'vacancy'=>fake()->randomDigitNot(0),
            'description'=> fake()->paragraph(5)
        ];
    }
}
