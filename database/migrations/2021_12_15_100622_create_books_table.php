<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->text('deskripsi');
            $table->integer('jml_halaman');
            $table->date('tgl_terbit');
            $table->string('ISBN');
            $table->float('panjang');
            $table->float('berat');
            $table->float('lebar');
            $table->integer('stok');
            $table->integer('harga');
            $table->float('diskon');
            $table->text('thumbnail');
            $table->foreignId('penerbit_id');
            $table->foreignId('bahasa_id');
            $table->foreignId('kategori_id');
            $table->foreignId('penulis_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
