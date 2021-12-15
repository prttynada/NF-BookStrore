<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kategori::create([
            'nama' => 'Fiksi'
        ]);
        Kategori::create([
            'nama' => 'Bisnis'
        ]);
        Kategori::create([
            'nama' => 'Sains & Teknologi'
        ]);
        Kategori::create([
            'nama' => 'Kesehatan'
        ]);
        Kategori::create([
            'nama' => 'Buku anak'
        ]);
        Kategori::create([
            'nama' => 'Hiburan'
        ]);
        Kategori::create([
            'nama' => 'Religi'
        ]);
        Kategori::create([
            'nama' => 'Seni'
        ]);
        Kategori::create([
            'nama' => 'Memasak, makanan & minuman'
        ]);
    }
}
