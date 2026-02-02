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
}
