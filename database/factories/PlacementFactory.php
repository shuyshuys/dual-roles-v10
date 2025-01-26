<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\DataEmployee;
use App\Models\Placement;
use App\Models\PlacementStatus;
use App\Models\Placementlocation;
use App\Models\Position;
use App\Models\Shift;

class PlacementFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Placement::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'employee_number' => fake()->word(),
            'employee_id' => DataEmployee::factory(),
            'location_id' => Placementlocation::factory(),
            'position_id' => Position::factory(),
            'placement_status_id' => PlacementStatus::factory(),
            'shift_id' => Shift::factory(),
            'placement_start' => fake()->date(),
            'placement_end' => fake()->date(),
        ];
    }
}
