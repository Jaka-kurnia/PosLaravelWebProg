<?php

namespace App\Http\Controllers;

use App\Models\Suplier;
use Illuminate\Http\Request;
use Symfony\Component\Routing\Route;

class SuplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $supliers = Suplier::all();
        return view('suplier.index', compact('supliers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('suplier.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'suplier_code'  => 'required',
            'suplier_name'  => 'required',
            'address'       => 'required',
            'phone'         => 'required'
        ], [
            'suplier_code.required'  => 'Kode Suplier wajib diisi',
            'suplier_name.required'  => 'Nama Suplier wajib diisi',
            'address.required'       => 'Alamat wajib diisi',
            'phone.required'         => 'No Telepon wajib diisi'
        ]);

        $store = Suplier::create($request->all());
        if ($store) {
            return redirect('/suplier')->with('success', 'Data berhasil disimpan');
        } else {
            return back()->with('error', 'Data gagal disimpan');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Suplier $suplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $suplier = Suplier::findOrFail($id);
        return view('suplier.edit', compact('suplier'));
        if (!$suplier) {
            return redirect('/suplier')->with('error', 'Data tidak ditemukan');
        } else {
            return view('suplier.edit', compact('suplier'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'suplier_code'  => 'required',
            'suplier_name'  => 'required',
            'address'       => 'required',
            'phone'         => 'required'
        ], [
            'suplier_code.required'  => 'Kode Suplier wajib diisi',
            'suplier_name.required'  => 'Nama Suplier wajib diisi',
            'address.required'       => 'Alamat wajib diisi',
            'phone.required'         => 'No Telepon wajib diisi'
        ]);

        $suplier = Suplier::findOrFail($id);
        $update = $suplier->update($request->all());
        if ($update) {
            return redirect('/suplier')->with('success', 'Data berhasil diupdate');
        } else {
            return back()->with('error', 'Data gagal diupdate');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $suplier = Suplier::findOrFail($id);
        $suplier->delete();
        return redirect('/suplier')->with('success', 'Data berhasil dihapus');
    }
}
