@extends('layouts.app')

@section('content')
<div class="p-6 sm:p-8 max-w-3xl">
    <div class="mb-8">
        <a href="{{ route('suplier.index') }}" class="inline-flex items-center text-sm text-slate-500 hover:text-blue-600 transition-colors mb-4 group">
            <i data-lucide="arrow-left" class="w-4 h-4 mr-1 group-hover:-translate-x-1 transition-transform"></i>
            Kembali ke Daftar Supplier
        </a>
        <h1 class="text-2xl font-bold text-slate-900">Edit Data Supplier</h1>
        <p class="text-sm text-slate-500 mt-1">Perbarui informasi kontak atau alamat supplier yang dipilih.</p>
    </div>

    <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">
        <form action="{{ route('suplier.update', $suplier->id) }}" method="POST" class="p-6 sm:p-8 space-y-6">
            @csrf
            @method('PUT')
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="space-y-2">
                    <label for="suplier_code" class="text-sm font-bold text-slate-700">Kode Supplier</label>
                    <input type="text" name="suplier_code" id="suplier_code" 
                           value="{{ old('suplier_code', $suplier->suplier_code) }}"
                           placeholder="SUP-XXX"
                           class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all @error('suplier_code') @enderror">
                    @error('suplier_code')
                        <p class="text-xs text-rose-500 font-medium">{{ $message }}</p>
                    @enderror
                </div>

                <div class="space-y-2">
                    <label for="suplier_name" class="text-sm font-bold text-slate-700">Nama Supplier</label>
                    <input type="text" name="suplier_name" id="suplier_name" 
                           value="{{ old('suplier_name', $suplier->suplier_name) }}"
                           placeholder="Nama perusahaan"
                           class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all @error('suplier_name') @enderror">
                    @error('suplier_name')
                        <p class="text-xs text-rose-500 font-medium">{{ $message }}</p>
                    @enderror
                </div>

                <div class="space-y-2">
                    <label for="phone" class="text-sm font-bold text-slate-700">Nomor Telepon</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-4 flex items-center text-slate-400 text-sm border-r pr-3 border-slate-200">
                            +62
                        </span>
                        <input type="text" name="phone" id="phone" 
                               value="{{ old('phone', $suplier->phone) }}"
                               placeholder="812xxxx"
                               class="w-full pl-16 pr-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all @error('phone') @enderror">
                    </div>
                    @error('phone')
                        <p class="text-xs text-rose-500 font-medium">{{ $message }}</p>
                    @enderror
                </div>

                <div class="space-y-2 md:col-span-2">
                    <label for="address" class="text-sm font-bold text-slate-700">Alamat Lengkap</label>
                    <textarea name="address" id="address" rows="3"
                              placeholder="Jl. ...."
                              class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all @error('address') @enderror">{{ old('address', $suplier->address) }}</textarea>
                    @error('address')
                        <p class="text-xs text-rose-500 font-medium">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="pt-6 border-t border-slate-100 flex flex-col sm:flex-row items-center gap-3">
                <button type="submit" 
                        class="w-full sm:w-auto px-8 py-3 bg-blue-600 hover:bg-blue-700 text-white text-sm font-bold rounded-xl shadow-lg shadow-blue-100 transition-all active:scale-95 flex items-center justify-center">
                    <i data-lucide="refresh-cw" class="w-4 h-4 mr-2"></i>
                    Update Data Supplier
                </button>
                <a href="{{ route('suplier.index') }}" 
                   class="w-full sm:w-auto px-8 py-3 bg-slate-100 hover:bg-slate-200 text-slate-600 text-sm font-bold rounded-xl transition-all text-center">
                    Batal
                </a>
            </div>
        </form>
    </div>
</div>
@endsection