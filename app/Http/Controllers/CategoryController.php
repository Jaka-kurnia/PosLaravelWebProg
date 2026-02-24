<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::getAll($request);

        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store( Request $request)
    {
        $data =[
            'category_name' => $request->category_name
        ];

        $store = Category::store($data);
       
        if($store){
            return redirect('/categories')->with('success', 'Data berhasil dsimpan');

        }else{
            echo "Data Gagal disimpan";
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
             return redirect('/categories')->with('success', 'Data berhasil diupdate');
        } else {
            echo "Data Gagal diupdate";
        }
    }

    public function destroy($id)
    {
        $delete = Category::deleteData($id);
        if ($delete) {
            return redirect('/categories')->with('success', 'Data berhasil dihapus');
        } else {
            echo "Data Gagal dihapus";
        }
    }
}
