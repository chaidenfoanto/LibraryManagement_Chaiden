<?php

namespace Database\Seeders;

use App\Models\FinalYearProject;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FinalYearProjectSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        FinalYearProject::create([
            'judul' => 'Analisis Keuangan pada Usaha Kecil dan Menengah',
            'nama_mhs' => 'Andi Pratama',
            'NIM' => '20231015',
            'dosen_pembimbing' => 'Dr. Siti Rahmah',
            'date' => '2023-04-01',
        ]);

        FinalYearProject::create([
            'judul' => 'Pengaruh Pendidikan Keuangan terhadap Keputusan Investasi',
            'nama_mhs' => 'Budi Santoso',
            'NIM' => '20231016',
            'dosen_pembimbing' => 'Dr. Fajar Malik',
            'date' => '2023-06-10',
        ]);

        FinalYearProject::create([
            'judul' => 'Penerapan Habits untuk Meningkatkan Produktivitas',
            'nama_mhs' => 'Cindy Putri',
            'NIM' => '20231017',
            'dosen_pembimbing' => 'Dr. Wahyu Hakim',
            'date' => '2023-07-15',
        ]);

        FinalYearProject::create([
            'judul' => 'Membangun Mindset Investor di Kalangan Mahasiswa',
            'nama_mhs' => 'Diana Rahmawati',
            'NIM' => '20231018',
            'dosen_pembimbing' => 'Dr. Lestari Dewi',
            'date' => '2023-08-20',
        ]);

        FinalYearProject::create([
            'judul' => 'Mengembangkan Aplikasi Keuangan Pribadi',
            'nama_mhs' => 'Erwin Wijaya',
            'NIM' => '20231019',
            'dosen_pembimbing' => 'Dr. Ida Ayu',
            'date' => '2023-09-05',
        ]);
    }
}
