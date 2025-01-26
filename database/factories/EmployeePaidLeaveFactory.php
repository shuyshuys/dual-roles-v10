<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\EmployeePaidLeave;
use App\Models\EmployeesLeaveOption;
use App\Models\Placement;

class EmployeePaidLeaveFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EmployeePaidLeave::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'placement_id' => Placement::factory(),
            'date' => fake()->date(),
            'time' => fake()->time(),
            'option' => EmployeesLeaveOption::factory(),
            'reason' => fake()->text(),
            'approved_by_admin' => fake()->boolean(),
        ];
    }
}
