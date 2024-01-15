<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Iletisim;


class IletisimSeeder extends Seeder
{
    public function run():void
    {
        Iletisim::create([
            'ad_soyad' => 'Elif Sude Yayan',
            'email' => 'elifsuyn00@gmail.com',
            'telefon' => '123456789',
            'mesaj' => 'Merhaba, bu bir örnek mesajdır.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);


    }
}
