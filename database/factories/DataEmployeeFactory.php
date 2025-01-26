<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\DataEmployee;
use App\Models\Education;
use App\Models\Gada;
use App\Models\Marital;
use App\Models\User;

class DataEmployeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DataEmployee::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'education_id' => Education::factory(),
            'marital_id' => Marital::factory(),
            'gada_id' => Gada::factory(),
            'sex' => fake()->randomElement(["male","female"]),
            'phone_number' => fake()->phoneNumber(),
            'birthplace' => fake()->word(),
            'birth_date' => fake()->date(),
            'address' => fake()->word(),
            'mother_name' => fake()->word(),
            'body_height' => fake()->word(),
            'body_weight' => fake()->word(),
            'kk_number' => fake()->numberBetween(-10000, 10000),
            'ktp_number' => fake()->numberBetween(-10000, 10000),
            'kta_number' => fake()->word(),
            'kta_reg_number' => fake()->word(),
            'bpjs_kes' => fake()->word(),
            'bpjs_ket' => fake()->word(),
            'pkwt_number' => fake()->word(),
            'npwp_number' => fake()->numberBetween(-10000, 10000),
            'ijazah_gada_number' => fake()->numberBetween(-10000, 10000),
        ];
    }
}
