<?php

namespace Database\Seeders;

use App\Models\Book;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'judul' => 'Rich Dad Poor Dad',
            'pengarang' => 'Robert T. Kiyosaki',
            'penerbit' => 'Gramedia',
            'tahunTerbit' => '2018-07-15',
            'stock' => 12,
        ]);

        Book::create([
            'judul' => 'The Psychology of Money',
            'pengarang' => 'Morgan Housel',
            'penerbit' => 'Elex Media',
            'tahunTerbit' => '2020-05-20',
            'stock' => 15,
        ]);

        Book::create([
            'judul' => 'Atomic Habits',
            'pengarang' => 'James Clear',
            'penerbit' => 'Penguin Random',
            'tahunTerbit' => '2021-10-10',
            'stock' => 10,
        ]);

        Book::create([
            'judul' => 'The Power of Habit',
            'pengarang' => 'Charles Duhigg',
            'penerbit' => 'Katalis',
            'tahunTerbit' => '2019-09-12',
            'stock' => 8,
        ]);

        Book::create([
            'judul' => 'Start with Why',
            'pengarang' => 'Simon Sinek',
            'penerbit' => 'Wiley',
            'tahunTerbit' => '2017-11-23',
            'stock' => 15,
        ]);
    }
}
