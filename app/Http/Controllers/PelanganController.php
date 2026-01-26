<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PelanganController extends Controller
{
  public function index(){
    $data ['title']= "Halaman Pelanggan";
    $data['nama_produk'] = "Mejikom";
       return view('pelanggan.index',$data);
    }
}
