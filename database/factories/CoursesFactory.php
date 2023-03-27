<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Courses>
 */
class CoursesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'CourseName' => fake()->name(),
            'CourseLink' => fake()->word(),
            'CourseDesc' => fake()->text(),
            'CoursePrice' => 100,
            'IsFree'     => true,
            'CourseType_id' => 1,
            'Course_user_id' => 1,
            'Qty'         => 0,
            'State'      => 0
        ];
    }
}
