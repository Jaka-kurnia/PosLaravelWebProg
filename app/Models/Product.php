<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{

protected $guarded = [
    'id'
];
    // public static function getAll($request)
    // {
    //     $query = DB::table('products')
    //         ->select('products.*', 'categories.category_name as category_name')
    //         ->join('categories', 'products.category_id', '=', 'categories.id');

    //     if (!empty($request->product_name)) {
    //         $query->where('products.product_name', 'like', '%' . $request->product_name . '%');
    //     }

    //     // Gunakan alias products.id agar tidak ambigu dengan categories.id
    //     if (!empty($request->id)) {
    //         $query->where('products.id', $request->id);
    //     }

    //     return $query->get();
    // }

    // public static function store($data)
    // {
    //     // Pastikan timestamps terisi manual jika menggunakan Query Builder
    //     return DB::table('products')->insert($data);
    // }

    // public static function getProductById($id)
    // {
    //     return DB::table('products')->where('id', $id)->first();
    // }

    // public static function updateData($id, $data)
    // {
    //     // Tambahkan update timestamp secara otomatis
    //     $data['updated_at'] = now();
    //     return DB::table('products')->where('id', $id)->update($data);
    // }

    // public static function deleteProduct($id)
    // {
    //     return DB::table('products')->where('id',$id)->delete();
    // }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
