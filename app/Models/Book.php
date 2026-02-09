<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public static function ambilSemua(){
        $book = DB::table('books')->get();
        return $book;
    }
}
