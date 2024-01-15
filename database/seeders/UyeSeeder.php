<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Uye;

class UyeSeeder extends Seeder
{
    public function run()
    {
        Uye::create([
            'username' => 'elifsynaz',
            'email' => 'elifsy@example.com',
            'password' => bcrypt('güvenli123'),
        ]);

        Uye::factory(19)->create([

        'username' => $request->username,
        'email' => $request->email,
        'password' => $request->password,


        ]);
    }
}
