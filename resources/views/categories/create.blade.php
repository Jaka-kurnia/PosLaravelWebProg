@extends('layouts.app')
@section('content')
    <div class="p-6 sm:p-8 max-w-2xl">
        <div class="mb-8">
            <a href="{{ route('categories.index') }}"
                class="inline-flex items-center text-sm text-slate-500 hover:text-green-600 transition-colors mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-1" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                Kembali ke Daftar
            </a>
            <h1 class="text-2xl font-bold text-slate-900">Tambah Kategori Baru</h1>
            <p class="text-sm text-slate-500 mt-1">Masukkan nama kategori produk yang ingin Anda tambahkan.</p>
        </div>

        <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">
            <form action="{{ route('categories.store') }}" method="POST" class="p-6 sm:p-8 space-y-6">
                @csrf

                <div class="space-y-2">
                    <label for="category_name" class="text-sm font-bold text-slate-700">
                        Nama Kategori <span class="text-rose-500">*</span>
                    </label>
                    <div class="relative">
                        <input type="text" name="category_name" id="category_name"
                            placeholder="Contoh: Makanan, Minuman, Paket Hemat"
                            class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm outline-none focus:ring-2 focus:ring-green-500/20 focus:border-green-500 transition-all @error('category_name') @enderror"
                            required>
                    </div>
                    @error('category_name')
                        <p class="text-xs text-rose-500 mt-1 font-medium">{{ $message }}</p>
                    @enderror
                </div>

                <div class="pt-4 border-t border-slate-50 flex items-center gap-3">
                    <button type="submit"
                        class="px-6 py-3 bg-green-500 hover:bg-green-600 text-white text-sm font-bold rounded-xl shadow-lg shadow-green-100 transition-all active:scale-95 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        Simpan Kategori
                    </button>

                    <a href="{{ route('categories.index') }}"
                        class="px-6 py-3 bg-slate-100 hover:bg-slate-200 text-slate-600 text-sm font-bold rounded-xl transition-all text-center">
                        Batal
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection
