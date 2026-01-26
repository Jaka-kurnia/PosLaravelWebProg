<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index(){
       return view('prodak.index');
    }

    public function store(){
    echo "ini halaman simpan saya";
    }
}
