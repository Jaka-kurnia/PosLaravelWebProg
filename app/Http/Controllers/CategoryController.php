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
        if($store){
            echo "data tersimpan";
        }else{
            echo "Data Gagal sisimpan";
        }
    }

    public function edit($id){
        
    }
}
