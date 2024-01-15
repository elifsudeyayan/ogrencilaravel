<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kullanici;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
     $this->call([
        IletisimSeeder::class,
        AboutSeeder::class,
        KullaniciSeeder::class,
        UyeSeeder::class,




     ]);
    }
}
