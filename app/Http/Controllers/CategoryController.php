<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::getAll();

        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        //    dd($request->category_name);
        $data = [
            'category_name' => $request->category_name,
        ];
        $store = Category::store($data);
        if ($store) {
            echo "data tersimpan";
        } else {
            echo "Data Gagal sisimpan";
        }
    }

    public function edit($id)
    {
        $categories = Category::getCategorybyId($id);
        return view('categories.edit', compact('categories'));
    }

    public function update(Request $request, $id)
    {
        $data = [
            'category_name' => $request->category_name
        ];
        $update = Category::updateData($id, $data);

        if ($update) {
            echo "Data Berhasil di update";
        } else {
            echo "Data Gagal disimpan";
        }
    }

    // public function delete(Request $request , $id){
    //     $data = [
    //         'category_name' =>$request->category_name
    //     ];
    //     $delete = Category::deleteData($id, $data);

    //     if($delete){
    //         echo "data berhasil di hapus";
    //     }else{
    //          echo "data gagal di hapus";
    //     }
    // }
}
