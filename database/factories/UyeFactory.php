<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Uye;

use Illuminate\Support\Str;

class UyeFactory extends Factory
{
    protected $model = Uye::class;

    public function definition()
    {
        return [
            'username' => $this->faker->userName,
            'email' => $this->faker->unique()->safeEmail,
            'password' => bcrypt('güvenli123'),
        ];
    }
}
