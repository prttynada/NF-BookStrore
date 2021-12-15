<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
/*      Book::create([
            'judul' => '',
            'deskripsi' => '',
            'jml_halaman' => ,
            'tgl_terbit' => '2021-12-15',
            'ISBN' => '',
            'panjang' => 22,
            'berat' => ,
            'lebar' => 17,
            'stok' => ,
            'harga' => ,
            'diskon' => ,
            'thumbnail' => '',
            'penerbit_id' => ,
            'bahasa_id' => 1,
            'kategori_id' => 5,
            'penulis_id' => 
        ]);
*/

        Book::create([
            'judul' => 'Caroline Yang Baik Hati',
            'deskripsi' => 'Caroline si landak suka sekali membantu teman-temannya di hutan. Semua hewan senang berteman dengannya. Namun, suatu hari, Caroline tidak muncul selama berhari-hari. Ada apa dengan Caroline, ya? Seri Jenjang Baca dirancang berdasarkan ketentuan Jenjang Kemampuan Membaca dari Kemendikbud. Terdapat penomoran level di setiap judulnya. Dengan begitu, guru/orangtua dapat memberikan bahan bacaan terbaik sesuai kemampuan anak agar mereka semakin suka membaca. [sumber: gramedia.com]',
            'jml_halaman' => 24,
            'tgl_terbit' => '2021-12-15',
            'ISBN' => '9786230407116',
            'panjang' => 22,
            'berat' => 0.15,
            'lebar' => 17,
            'stok' => 13,
            'harga' => 38000,
            'diskon' => 2,
            'thumbnail' => 'Caroline_yang_Baik_Hati.jpg',
            'penerbit_id' => 2,
            'bahasa_id' => 1,
            'kategori_id' => 5,
            'penulis_id' => 2
        ]);

        Book::create([
            'judul' => 'Poterick Yang Percaya Diri',
            'deskripsi' => 'Dahulu kala, para merak memilih raja berdasarkan keindahan bulunya. Poterick, sang pewaris kerajaan, memiliki bulu yang putih seputih kelinci. Setiap hari, dia harus rela tubuhnya diwarnai sebelum pergi, hingga tibalah hari pemilihan raja. Bagaimana kisah Poterick selanjutnya, ya? Seri Jenjang Baca dirancang berdasarkan ketentuan Jenjang Kemampuan Membaca dari Kemendikbud. Terdapat penomoran level di setiap judulnya. Dengan begitu, guru/orangtua dapat memberikan bahan bacaan terbaik sesuai kemampuan anak agar mereka semakin suka membaca. [sumber: gramedia.com]',
            'jml_halaman' => 24,
            'tgl_terbit' => '2021-12-15',
            'ISBN' => '9786230407109',
            'panjang' => 22,
            'berat' => 0.15,
            'lebar' => 17,
            'stok' => 11,
            'harga' => 38000,
            'diskon' => 3,
            'thumbnail' => 'Poterick_yang_Percaya_Diri.jpg',
            'penerbit_id' => 3,
            'bahasa_id' => 1,
            'kategori_id' => 5,
            'penulis_id' => 4
        ]);

        Book::create([
            'judul' => 'Kamus Pertamaku Bahasa Inggris',
            'deskripsi' => 'Kamus Bahasa Inggris—lndonesia cocok untuk anak—anak yang baru belajar dan mengenal bahasa Inggris. Lengkap dengan contoh pemakaian dalam kalimat dan cara pengucapan berstandar IPA (International Phonemic Alphabet).',
            'jml_halaman' => 136,
            'tgl_terbit' => '2021-6-30',
            'ISBN' => '9786230304828',
            'panjang' => 22,
            'berat' => 0.25,
            'lebar' => 17,
            'stok' => 4,
            'harga' => 108000,
            'diskon' => 12,
            'thumbnail' => 'KAMUS_PERTAMAKU_BAHASA_INGGRIS.jpg',
            'penerbit_id' => 1,
            'bahasa_id' => 1,
            'kategori_id' => 5,
            'penulis_id' => 5
        ]);

        Book::create([
            'judul' => 'Lima Sekawan: Minggat ',
            'deskripsi' => '"Lima Sekawan adalah Julian, Dick, George, Anne, dan—tentu saja—Timmy! Ke mana pun mereka pergi pasti ada petualangan yang seru dan mengasyikkan!
            MINGGAT
            Siapa yang telah datang ke Pulau Kirrin? Apa isi koper hitam misterius yang disembunyikan di Pulau Kirrin? Lima Sekawan mengira mereka sedang memburu penyelundup—sampai mereka mendengar jeritan anak kecil…."',
            'jml_halaman' => 272,
            'tgl_terbit' => '2018-01-22',
            'ISBN' => '9786020321301',
            'panjang' => 22,
            'berat' => 0.120,
            'lebar' => 17,
            'stok' => 7,
            'harga' => 43000,
            'diskon' => 5,
            'thumbnail' => 'Lima-Sekawan_Minggat.jpg',
            'penerbit_id' => 1,
            'bahasa_id' => 1,
            'kategori_id' => 5,
            'penulis_id' => 3
        ]);

        Book::create([
            'judul' => 'Harry Potter and The Chamber of Secrets',
            'deskripsi' => 'KAMAR RAHASIA TELAH DIBUKA. MUSUH SANG PEWARIS, WASPADALAH. Ketika Dobby, peri rumah lusuh, tiba-tiba muncul di Privet Drive dan berkeras bahwa Harry Potter tidak boleh kembali ke Hogwarts, Harry menduga musuh bebuyutannya, Draco Malfoy, berada di balik semua itu. Setelah diselamatkan Ron Weasley---naik mobil terbang!---dari keluarga Dursley yang menyebalkan, Harry menghabiskan sisa liburan musim panasnya di The Burrow.
                Kehidupan bersama keluarga Weasley begitu seru, Harry segera lupa pada peringatan-peringatan Dobby. Namun, ia segera kembali teringat saat muncul tulisan mengerikan di koridor gelap sekolah. Tulisan yang menggemakan ramalan Dobby bahwa hal-hal menakutkan akan segera terjadi…',
            'jml_halaman' => 272,
            'tgl_terbit' => '2018-02-19',
            'ISBN' => '9786020379784',
            'panjang' => 22,
            'berat' => 0.850,
            'lebar' => 17,
            'stok' => 2,
            'harga' => 420000,
            'diskon' => 10,
            'thumbnail' => 'Harry-Potter-dan-Kamar-Rahasia-Harry-Potter-and-The-Chamber-of-Secrets.jpg',
            'penerbit_id' => 1,
            'bahasa_id' => 2,
            'kategori_id' => 5,
            'penulis_id' => 6
        ]);
    }
}
