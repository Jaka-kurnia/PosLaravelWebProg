<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Field extends Model
{
    public static function getAll()
    {
        $query = DB::table('fields');

        $field = $query->get();

        return $field;
    }

    public static function store($data)
    {
        DB::table('fields')->insert($data);
    }

    public static function getFieldId($id)
    {
        return DB::table('fields')->where('id', $id)->first();
    }

    public static function updateData($id , $data){
        return DB::table('fields')->where('id' , $id)->update($data);
    }


    public static function deleteData($id ){
        return DB::table('fields')->where('id' , $id)->delete();
    }
}
