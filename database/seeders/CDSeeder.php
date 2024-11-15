<?php

namespace Database\Seeders;

use App\Models\CD;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CDSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        CD::create([
            'judul' => 'The Wolf of Wall Street',
            'pengarang' => 'Martin Scorsese',
            'penerbit' => 'Paramount',
            'genre' => 'Drama, Biografi',
        ]);

        CD::create([
            'judul' => 'The Pursuit of Happyness',
            'pengarang' => 'Gabriele Muccino',
            'penerbit' => 'Columbia',
            'genre' => 'Drama, Inspirasi',
        ]);

        CD::create([
            'judul' => 'Moneyball',
            'pengarang' => 'Bennett Miller',
            'penerbit' => "Sony Pictures",
            'genre' => "Drama, Olahraga",
        ]);

        CD::create([
            'judul' => 'The Big Short',
            'pengarang' => 'Adam McKay',
            'penerbit' => 'Paramount',
            'genre' => 'Drama, Keuangan',
        ]);

        CD::create([
            'judul' => 'The Social Network',
            'pengarang' => 'David Fincher',
            'penerbit' => 'Columbia',
            'genre' => 'Drama, Teknologi',
        ]);
    }
}
