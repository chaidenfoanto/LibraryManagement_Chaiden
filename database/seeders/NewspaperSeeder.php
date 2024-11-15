<?php

namespace Database\Seeders;

use App\Models\Newspaper;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewspaperSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Newspaper::create([
            'judul' => 'Tren Literasi Keuangan di Kalangan Milenial',
            'penerbit' => 'FinTech Today',
            'tanggal' => '2024-04-15',
        ]);

        Newspaper::create([
            'judul' => "5 Buku Wajib untuk Mengatur Keuangan Pribadi",
            'penerbit' => "Finance Weekly",
            'tanggal' => "2024-02-25",
        ]);

        Newspaper::create([
            'judul' => "Investasi Saham untuk Pemula",
            'penerbit' => "Market Insights",
            'tanggal' => "2024-03-10",
        ]);

        Newspaper::create([
            'judul' => "Membangun Karier di Industri Keuangan",
            'penerbit' => "Business Daily",
            'tanggal' => "2024-05-20",
        ]);

        Newspaper::create([
            'judul' => "Pengaruh Pendidikan Keuangan pada Masyarakat",
            'penerbit' => "Finance Today",
            'tanggal' => "2024-06-05",
        ]);
    }
}
