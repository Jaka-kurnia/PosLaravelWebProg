<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        // $categories = Category::getAll($request);
        $categories = Category::all();

        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        // $data = [
        //     'category_name' => $request->category_name
        // ];

        $store = Category::create($request->all());

        if ($store) {
            return redirect('/categories')->with('success', 'Data berhasil dsimpan');
        } else {
            echo "Data Gagal disimpan";
        }
    }

    public function edit($id)
    {
        $categories = Category::find($id);
        return view('categories.edit', compact('categories'));
    }

    public function update(Request $request, $id)
    {
        // $data = [
        //     'category_name' => $request->category_name
        // ];
        $product = Category::find($id);
        $update =  $product->update($request->all());

        if ($update) {
            return redirect()->route('categories.index');
        } else {
            return redirect()->route('categories.index');
        }
    }

    public function destroy($id)
    {
        $product = Category::find($id);
        if ($product) {
            return redirect('/categories')->with('success', 'Data berhasil dihapus');
        } else {
            echo "Data Gagal dihapus";
        }
    }
}
