@extends('layouts.app')
@section('content')
    <div class="p-6 bg-slate-50 min-h-screen">
        <div class="max-w-6xl mx-auto">

            <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-6">
                <h1 class="text-2xl font-bold text-slate-800">Halaman Produk</h1>
                <a href="{{ route('product.create') }}"
                    class="inline-flex items-center gap-2 bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-lg transition-all shadow-sm text-sm font-medium">
                    <i data-lucide="plus" class="w-4 h-4"></i>
                    Tambah Produk
                </a>
            </div>

            @if (session('success'))
                <div
                    class="mb-4 p-4 bg-emerald-100 border-l-4 border-emerald-500 text-emerald-700 rounded-r-lg shadow-sm flex items-center gap-3">
                    <i data-lucide="check-circle" class="w-5 h-5"></i>
                    <span class="text-sm font-medium">{{ session('success') }}</span>
                </div>
            @endif

            <div class="bg-white p-4 rounded-xl shadow-sm border border-slate-200 mb-6">
                <form action="/product" method="GET" class="flex flex-wrap md:flex-nowrap gap-3">
                    <div class="relative flex-1 min-w-[200px]">
                        <i data-lucide="search" class="absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-slate-400"></i>
                        <input type="text" name="product_name" placeholder="Cari nama produk..."
                            value="{{ Request('product_name') }}"
                            class="w-full pl-10 pr-4 py-2.5 bg-slate-50 border border-slate-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-500 transition-all text-sm text-slate-600">
                    </div>

                    <div class="relative min-w-[180px]">
                        <select name="category_id"
                            class="w-full pl-4 pr-10 py-2.5 bg-slate-50 border border-slate-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-500 transition-all text-sm text-slate-600 appearance-none">
                            <option value="">Semua Kategori</option>
                            @foreach ($categories as $cat)
                                <option value="{{ $cat->id }}"
                                    {{ Request('category_id') == $cat->id ? 'selected' : '' }}>
                                    {{ $cat->category_name }}
                                </option>
                            @endforeach
                        </select>
                        <i data-lucide="chevron-down"
                            class="absolute right-3 top-1/2 -translate-y-1/2 w-4 h-4 text-slate-400 pointer-events-none"></i>
                    </div>

                    <div class="flex gap-2">
                        <button type="submit"
                            class="bg-slate-800 hover:bg-slate-900 text-white px-6 py-2.5 rounded-lg text-sm font-medium transition-colors flex items-center gap-2">
                            <i data-lucide="filter" class="w-4 h-4"></i>
                            Filter
                        </button>

                        @if (Request('product_name') || Request('category_id'))
                            <a href="/product"
                                class="bg-slate-100 hover:bg-slate-200 text-slate-600 px-4 py-2.5 rounded-lg text-sm font-medium transition-colors flex items-center">
                                Reset
                            </a>
                        @endif
                    </div>
                </form>
            </div>

            <div class="bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-slate-50 border-b border-slate-200">
                                <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider">No</th>
                                <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider">Kategori
                                </th>
                                <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider">Kode</th>
                                <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider">Nama Produk
                                </th>
                                <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider">Harga</th>
                                <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider">Unit</th>
                                <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider text-center">
                                    Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100">
                            @foreach ($products as $index => $item)
                                <tr class="hover:bg-slate-50/50 transition-colors">
                                    <td class="px-6 py-4 text-sm text-slate-500">{{ $index + 1 }}</td>
                                    <td class="px-6 py-4 text-sm font-medium text-slate-700">
                                        <span class="bg-slate-100 px-2 py-1 rounded text-xs text-slate-600">
                                            {{ $item->category->category_name }}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-slate-600 font-mono">{{ $item->product_code }}</td>
                                    <td class="px-6 py-4 text-sm font-semibold text-slate-800">{{ $item->product_name }}
                                    </td>
                                    <td class="px-6 py-4 text-sm text-slate-600">Rp
                                        {{ number_format($item->price, 0, ',', '.') }}</td>
                                    <td class="px-6 py-4 text-sm text-slate-500">{{ $item->unit }}</td>
                                    <td class="px-6 py-4 text-sm">
                                        <div class="flex justify-center items-center gap-2">
                                            <a href="{{ route('product.edit', $item->id) }}"
                                                class="p-2 text-amber-600 hover:bg-amber-50 rounded-lg transition-colors"
                                                title="Edit Data">
                                                <i data-lucide="pencil-line" class="w-4 h-4"></i>
                                            </a>

                                            <form action="{{ route('product.destroy', $item->id) }}" method="POST"
                                                class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"
                                                    class="p-2 text-rose-600 hover:bg-rose-50 rounded-lg transition-colors"
                                                    title="Hapus Data">
                                                    <i data-lucide="trash-2" class="w-4 h-4"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                @if ($products->isEmpty())
                    <div class="py-12 text-center text-slate-400">
                        <i data-lucide="package-search" class="w-12 h-12 mx-auto mb-3 opacity-20"></i>
                        <p>Data produk tidak ditemukan.</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
