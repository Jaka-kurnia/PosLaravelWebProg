@extends('layouts.app')

@section('content')
    <div class="p-6 sm:p-8 max-w-3xl">
        <div class="mb-8">
            <a href="{{ route('product.index') }}"
                class="inline-flex items-center text-sm text-slate-500 hover:text-blue-600 transition-colors mb-4 group">
                <i data-lucide="arrow-left" class="w-4 h-4 mr-1 group-hover:-translate-x-1 transition-transform"></i>
                Kembali ke Daftar Produk
            </a>
            <h1 class="text-2xl font-bold text-slate-900">Edit Produk</h1>
            <p class="text-sm text-slate-500 mt-1">Perbarui detail informasi, kategori, dan harga produk Anda.</p>
        </div>

        <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">
            <form action="{{ route('product.update', $product->id) }}" method="POST" class="p-6 sm:p-8 space-y-6">
                @csrf
                @method('PUT')

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-2 md:col-span-2">
                        <label for="category_id" class="text-sm font-bold text-slate-700">Kategori Produk</label>
                        <div class="relative">
                            <select name="category_id" id="category_id" required
                                class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 appearance-none transition-all">
                                <option value="">-- Pilih Kategori --</option>
                                @foreach ($categories as $item)
                                    <option value="{{ $item->id }}"
                                        {{ old('category_id', $product->category_id) == $item->id ? 'selected' : '' }}>
                                        {{ $item->category_name }}
                                    </option>
                                @endforeach
                            </select>
                            <div class="absolute inset-y-0 right-4 flex items-center pointer-events-none">
                                <i data-lucide="chevron-down" class="w-4 h-4 text-slate-400"></i>
                            </div>
                        </div>
                        @error('category_id')
                            <p class="text-xs text-rose-500 font-medium">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="space-y-2">
                        <label for="product_code" class="text-sm font-bold text-slate-700">Kode Produk</label>
                        <input type="text" name="product_code" id="product_code"
                            value="{{ old('product_code', $product->product_code) }}" placeholder="Contoh: PRD-001"
                            class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all @error('product_code') @enderror">
                        @error('product_code')
                            <p class="text-xs text-rose-500 font-medium">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="space-y-2">
                        <label for="product_name" class="text-sm font-bold text-slate-700">Nama Produk</label>
                        <input type="text" name="product_name" id="product_name"
                            value="{{ old('product_name', $product->product_name) }}" placeholder="Masukkan nama produk"
                            class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all @error('product_name') @enderror">
                        @error('product_name')
                            <p class="text-xs text-rose-500 font-medium">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="space-y-2">
                        <label for="price" class="text-sm font-bold text-slate-700">Harga Jual</label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-4 flex items-center text-slate-400 text-sm font-medium">
                                Rp
                            </span>
                            <input type="text" name="price" id="price" value="{{ old('price', $product->price) }}"
                                placeholder="0"
                                class="w-full pl-12 pr-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all @error('price') @enderror">
                        </div>
                        @error('price')
                            <p class="text-xs text-rose-500 font-medium">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="space-y-2">
                        <label for="unit" class="text-sm font-bold text-slate-700">Satuan (Unit)</label>
                        <input type="text" name="unit" id="unit" value="{{ old('unit', $product->unit) }}"
                            placeholder="Contoh: Pcs, Box, Kg"
                            class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm outline-none focus:ring-2 focus:ring-blue-500/20 focus:border-blue-500 transition-all @error('unit') @enderror">
                        @error('unit')
                            <p class="text-xs text-rose-500 font-medium">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="pt-6 border-t border-slate-100 flex flex-col sm:flex-row items-center gap-3">
                    <button type="submit"
                        class="w-full sm:w-auto px-8 py-3 bg-blue-600 hover:bg-blue-700 text-white text-sm font-bold rounded-xl shadow-lg shadow-blue-100 transition-all active:scale-95 flex items-center justify-center">
                        <i data-lucide="save" class="w-4 h-4 mr-2"></i>
                        Update Produk
                    </button>
                    <a href="{{ route('product.index') }}"
                        class="w-full sm:w-auto px-8 py-3 bg-slate-100 hover:bg-slate-200 text-slate-600 text-sm font-bold rounded-xl transition-all text-center">
                        Batal
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection
