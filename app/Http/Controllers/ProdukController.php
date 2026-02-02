<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index(){
        $title = "Halaman Produk";
        $dataproduk = Produk::getDataproduk();
        // dd($produk);
       return view('produk.index', compact('title', 'dataproduk'));
    }

    public function store(){
    echo "ini halaman simpan saya";
    }
}
