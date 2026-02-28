<?php

namespace App\Http\Controllers;

use App\Models\Field;
use Illuminate\Http\Request;

class FieldController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $field = Field::getAll();

        return view('field.index', compact('field'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('field.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            "kode_lapang" => $request->kode_lapang,
            "nama_lapang" => $request->nama_lapang,
            "price"             => $request->price,
        ];

        $store = Field::store($data);

        if ($data) {
            return redirect('/field')->with('success', 'data berhasil disimpan');
        } else {
            echo "data gagal disimpan";
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Field $field)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $field = Field::getFieldId($id);
        return view('field.edit', compact('field'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = [
            "kode_lapang" => $request->kode_lapang,
            "nama_lapang" => $request->nama_lapang,
            "price"             => $request->price,
        ];

        $update = Field::updateData($id , $data);

        if ($update) {
            return redirect('/field')->with('success', 'data berhasil diupdate');
        } else {
            return redirect('/field')->with('error', 'data gagal diupdate');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $delete = Field::deleteData($id);
    }
}
