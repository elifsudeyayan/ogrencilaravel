<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\About;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::create([
            'title' => 'HAKKIMIZDA',
            'content' => 'EASY LEARNER yabancı dil eğitiminde sahip olduğu derin bilgi birikimini sürekli güncelleyerek ve dünya standartlarına yakından uyum sağlayarak eşsiz kalitede hizmet sunmaktadır. Konuşma odaklı İngilizce, sınav odaklı İngilizce ve diğer bütün yabancı dillerle ilgili uluslararası eğitim teknikleri, modern bilimsel yöntemler ve en son trendleri kullanarak her yıl 1.000.000\'un üzerinde öğrencinin eğitimini başarıyla tamamlamaktayız.',

        ]);
    }
}
