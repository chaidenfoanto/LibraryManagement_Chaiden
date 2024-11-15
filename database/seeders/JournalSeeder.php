<?php

namespace Database\Seeders;

use App\Models\Journal;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JournalSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Journal::create([
            'judul' => 'Membangun Kebiasaan Keuangan Positif',
            'penulis' => 'Rani Fitri',
            'tahunTerbit' => '2021-08-05',
        ]);

        Journal::create([
            'judul' => 'Pengaruh Pendidikan Keuangan pada Masyarakat',
            'penulis' => 'Dina Septiani',
            'tahunTerbit' => '2020-06-12',
        ]);

        Journal::create([
            'judul' => 'Mindset Millionaire dan Perubahan Karier',
            'penulis' => 'Eko Pratama',
            'tahunTerbit' => '2022-03-09',
        ]);

        Journal::create([
            'judul' => 'Strategi Investasi untuk Generasi Milenial',
            'penulis' => 'Arif Hidayat',
            'tahunTerbit' => '2021-11-17',
        ]);

        Journal::create([
            'judul' => 'Dampak Pengelolaan Keuangan pada Kesejahteraan',
            'penulis' => 'Fenny Putri',
            'tahunTerbit' => '2023-02-22',
        ]);
    }
}
