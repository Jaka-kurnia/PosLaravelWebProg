<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Category extends Model
{

    protected $fillable = [
        'category_name'
    ];
    // public static function getAll($request)
    // {
    //     $query = DB::table('categories');
    //     if (!empty($request->category_name)) {
    //         $query->where('category_name', 'like', '%' . $request->category_name . '%');
    //     }

    //     if (!empty($request->id)) {
    //         $query->where('id', $request->id);
    //     }
    //     $categories = $query->get();
    //     return $categories;
    // }

    // public static function store($data)
    // {
    //     return DB::table('categories')->insert($data);
    // }

    // public static function getCategoryById($id)
    // {
    //     return DB::table('categories')
    //         ->where('id', $id) // pastikan integer
    //         ->first();
    // }

    // public static function updateData($id, $data)
    // {
    //     return DB::table('categories')
    //         ->where('id', $id)
    //         ->update($data);
    // }

    // public static function deleteData($id)
    // {
    //     return  DB::table('categories')->where('id', $id)->delete();
    // }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
