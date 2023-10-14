<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
 {
            $nik = '198408082011012003'; //NIP Admin
            $tanggal_lahir = '1990-01-01'; // Tanggal Lahir Admin
            
          return [
              'nik' => $nik,
              'tanggal_lahir' => $tanggal_lahir,
              'username' => $nik, // Gunakan NIK sebagai username
              'password' => Hash::make($tanggal_lahir), // Gunakan tanggal lahir sebagai password
              'role' => $faker->randomElement(['Admin', 'Kader', 'Keluarga'])
    ];
};
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
