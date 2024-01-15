<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kullanici>
 */
class KullaniciFactory extends Factory
{
    public function definition()
    {
        return [
            'username' => $this->faker->userName,
            'password' => bcrypt('sifre123'),
        ];
    }
}
