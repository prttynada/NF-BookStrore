<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bahasa extends Model
{
    use HasFactory;

    // melindungi id
    protected $guarded = ['id'];

    // membuat relasi ke book
    public function book(){
        return $this->hasMany(Book::class);
    }
}
