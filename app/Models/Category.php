<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    public static function getAll()
    {
        $categories = DB::table('categories')->get();
        return $categories;
    }

    public static function store($data)
    {
        $data = DB::table('categories')->insert($data);
        return $data;
    }

    public static function getCategorybyId($id)
    {
        $categories = DB::table('categories')->where('id', $id)->first();
        return $categories;
    }
}
