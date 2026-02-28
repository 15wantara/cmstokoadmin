<?php

namespace Database\Factories;

use App\Models\Supplier;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Supplier>
 */
class SupplierFactory extends Factory
{
    protected $model = Supplier::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nmlengkap' => $this->faker->name(),
            'telpactive' =>$this->faker->unique()->phoneNumber(),
            'email' => fake()->unique()->safeEmail(),
            'companyname' => $this->faker->company(),
            'is_active' => $this->faker->randomElement(['active', 'nactive']),
        ];
    }
}
