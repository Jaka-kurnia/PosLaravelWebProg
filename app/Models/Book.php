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

    public static function store($data){
        return DB::table('books')->insert($data);
    }


    public static function getBookById($id)
    {
        return DB::table('books')
            ->where('id', $id) // pastikan integer
            ->first();
    }

    public static function perbaruiData($id,$data){
        return DB::table('books')
        ->where('id',$id)
        ->update($data);
    }

    // public static function destroy($id){
    //     return DB::table('books')
    //     ->where('id',$id)
    //     ->delete();
    // }
}
