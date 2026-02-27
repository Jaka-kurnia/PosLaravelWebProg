<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::getAll($request);
        return view('product.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::getAll(request());
        return view('product.create', compact('categories'));
    }

    public function store(Request $request)
    {
        // 1. Tambahkan Validasi agar tidak Error SQL lagi
        $request->validate([
            'category_id'  => 'required',
            'product_code' => 'required|unique:products,product_code',
            'product_name' => 'required',
            'price'        => 'required|numeric',
            'unit'         => 'required',
        ]);

        $data = [
            'category_id'  => $request->category_id, 
            'product_code' => $request->product_code,
            'product_name' => $request->product_name,
            'price'        => $request->price,
            'unit'         => $request->unit
        ];

        $store = Product::store($data);
        if ($store) {
            return redirect('/product')->with('success', 'Data berhasil disimpan');
        } else {
            return back()->with('error', 'Data gagal disimpan');
        }
    }

    public function edit($id)
    {
        $product = Product::getProductById($id);
        $categories = Category::getAll(request());

        if (!$product) {
            return redirect('/product')->with('error', 'Data tidak ditemukan');
        }

        return view('product.edit', compact('product', 'categories'));
    }

    public function update(Request $request, $id)
    {
        // 2. Tambahkan Validasi untuk Update
        $request->validate([
            'category_id'  => 'required',
            'product_code' => 'required',
            'product_name' => 'required',
            'price'        => 'required|numeric',
            'unit'         => 'required',
        ]);

        $data = [
            'category_id'  => $request->category_id, // DIPERBAIKI: sesuaikan dengan nama input di Blade
            'product_code' => $request->product_code,
            'product_name' => $request->product_name,
            'price'        => $request->price,
            'unit'         => $request->unit
        ];

        $update = Product::updateData($id, $data);
        
        // Menggunakan !== false karena Query Builder update bisa mengembalikan 0 jika data tidak ada yang berubah
        if ($update !== false) {
            return redirect('/product')->with('success', 'Data berhasil diupdate');
        } else {
            return back()->with('error', 'Data gagal diupdate');
        }
    }

   public function destroy($id)
{
    $delete = Product::deleteProduct($id);

    if ($delete) {
        return redirect('/product')->with('success', 'Data produk berhasil dihapus');
    } else {
        // Menggunakan back() agar user tidak keluar dari halaman jika gagal
        return back()->with('error', 'Data gagal dihapus atau ID tidak ditemukan');
    }
}
}