<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Form>
 */
class FormFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nomor_identitas' => $this->faker->numberBetween(1000000000000000, 9999999999999999),
            'nama' => $this->faker->name(),
            'tempat_lahir' => $this->faker->city(),
            'tanggal_lahir' => $this->faker->date(),
            'agama' => $this->faker->randomElement(['Islam', 'Kristen', 'Hindu', 'Buddha', 'Konghucu']),
            'alamat' => $this->faker->address(),
            'nomor_telepon' => $this->faker->phoneNumber(),
            'email' => $this->faker->email(),
            'created_by' => $this->faker->name(),
            'updated_by' => $this->faker->name(),
            'deleted_by' => $this->faker->name(),

        ];
    }
}
