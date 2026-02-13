<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $book = Book::ambilSemua() ;
        
        return view('book.index', compact('book'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('book.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    // dd($request->kode_buku);
        $data = [
        'kode_buku' => $request->kode_buku,
        'judul_buku' => $request->judul_buku,
        'stock'         => $request->stock
        ];

        $store = Book::store($data);

        if($store){
            echo "Data tersimpan";
        }else{
            "Gagal tersimpan";
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $book = Book::getBookById($id);
        return view('book.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = [
            'kode_buku' => $request->kode_buku,
            'judul_buku' => $request->judul_buku,
            'stock'         => $request->stock

        ];
        $update = Book::perbaruiData($id,$data);

        if ($update) {
            echo "Data Berhasil di update";
        } else {
            echo "Data Gagal disimpan";
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        //
    }
}
