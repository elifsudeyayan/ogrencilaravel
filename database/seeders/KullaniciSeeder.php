<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kullanici;

class KullaniciSeeder extends Seeder
{
    public function run()
    {
        Kullanici::factory()->create([
            'username' => 'Elif',
            'password' => bcrypt('sifre123'),
        ]);

         Kullanici::factory(15)->create([


            'username' => $request->username,
            'password' => $request->password,
        ]);


    }
}
