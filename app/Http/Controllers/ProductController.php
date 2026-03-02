<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::all();
        return view('product.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('product.create', compact('categories'));
    }

    public function store(Request $request)
    {
        // 1. Tambahkan Validasi agar tidak Error SQL lagi
        // $request->validate([
        //     'category_id'  => 'required',
        //     'product_code' => 'required|unique:products,product_code',
        //     'product_name' => 'required',
        //     'price'        => 'required|numeric',
        //     'unit'         => 'required',
        // ]);

        // $data = [
        //     'category_id'  => $request->category_id, 
        //     'product_code' => $request->product_code,
        //     'product_name' => $request->product_name,
        //     'price'        => $request->price,
        //     'unit'         => $request->unit
        // ];

        $store = Product::create($request->all());
        if ($store) {
            return redirect('/product')->with('success', 'Data berhasil disimpan');
        } else {
            return back()->with('error', 'Data gagal disimpan');
        }
    }

  public function edit($id)
{
    $product = Product::find($id);
    $categories = Category::all();

    if (!$product) {
        return redirect('/product')->with('error', 'Data tidak ditemukan');
    }

    return view('product.edit', compact('product', 'categories'));
}

    public function update(Request $request, $id)
    {
        // 2. Tambahkan Validasi untuk Update
        // $request->validate([
        //     'category_id'  => 'required',
        //     'product_code' => 'required',
        //     'product_name' => 'required',
        //     'price'        => 'required|numeric',
        //     'unit'         => 'required',
        // ]);

        // $data = [
        //     'category_id'  => $request->category_id,
        //     'product_code' => $request->product_code,
        //     'product_name' => $request->product_name,
        //     'price'        => $request->price,
        //     'unit'         => $request->unit
        // ];

        $product = Product::find($id);
        $update = $product->update($request->all());
        if ($update !== false) {
            return redirect('/product')->with('success', 'Data berhasil diupdate');
        } else {
            return back()->with('error', 'Data gagal diupdate');
        }
    }

   public function destroy($id)
{
    $product = Product::find($id);
    $delete = $product->delete();

    if ($delete) {
        return redirect('/product')->with('success', 'Data produk berhasil dihapus');
    } else {
        
        
        // Menggunakan back() agar user tidak keluar dari halaman jika gagal
        return back()->with('error', 'Data gagal dihapus atau ID tidak ditemukan');
    }
}
}