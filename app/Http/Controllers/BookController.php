<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    function index(){
        $kategori = Kategori::all();
        $latests = DB::table('books')->limit(6)->get();

        return view('contents.stok', [
            'title' => 'Stok',
            'kategori' => $kategori,
            'latests' => $latests
        ]);
    }
}
