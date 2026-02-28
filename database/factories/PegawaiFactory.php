<?php

namespace Database\Factories;

use App\Models\Pegawai;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pegawai>
 */
class PegawaiFactory extends Factory
{
    protected $model = Pegawai::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nipegawai' => '77'.$this->faker->unique()->numberBetween(100000, 999999),
            'nmlengkap' => $this->faker->name(),
            'jkel' => $this->faker->randomElement(['L', 'P']),
            'tgl_masuk' => $this->faker->date('Y-m-d'),
            'is_active' => $this->faker->randomElement(['0', '1', '2']),
            'created_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
