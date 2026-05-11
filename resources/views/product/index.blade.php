@extends('layouts.vuexy.vuexy')
@section('page_title', 'Manajemen Produk')
@section('title', 'Manajemen Produk')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            {{-- Form select dan pencarian --}}
            <form action="{{ route('product.index') }}" method="GET" class="d-flex">
                <input type="text" name="product_name" class="form-control me-2" placeholder="Nama Produk">
                <select name="category_id" class="form-select me-2">
                    <option value="">Semua Kategori</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                    @endforeach
                </select>
                <button type="submit" class="btn btn-primary">
                    <i class="ti ti-search me-1"></i>
                    Cari
                </button>
            </form>
            {{-- End form --}}
            <a href="{{ route('product.create') }}" class="btn btn-primary">
                <i class="ti ti-plus me-1"></i> Tambah Produk
            </a>
        </div>

        <div class="card-body">
            <div class="table-responsive text-nowrap">
                <table class="table table-hover">
                    <thead class="table-light">
                        <tr>
                            <th width="50px">No</th>
                            <th>Kategori</th>
                            <th>Kode</th>
                            <th>Nama Produk</th>
                            <th>Harga</th>
                            <th>Unit</th>
                            <th class="text-center" width="150px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @forelse ($products as $index => $item)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>
                                    <span class="badge bg-label-primary">
                                        {{ $item->category->category_name ?? 'Tanpa Kategori' }}
                                    </span>
                                </td>
                                <td><span class="fw-bold">{{ $item->product_code }}</span></td>
                                <td>{{ $item->product_name }}</td>
                                {{-- Format Rupiah --}}
                                <td>Rp {{ number_format($item->price, 0, ',', '.') }}</td>
                                <td><span class="badge bg-label-secondary">{{ $item->unit }}</span></td>
                                <td class="text-center">
                                    <div class="d-flex justify-content-center gap-2">
                                        <a href="{{ route('product.edit', $item->id) }}"
                                            class="btn btn-sm btn-icon btn-warning" data-bs-toggle="tooltip"
                                            title="Edit Data">
                                            <i class="ti ti-edit"></i>
                                        </a>

                                        {{-- Form Hapus yang Aman --}}
                                        <form action="{{ route('product.destroy', $item->id) }}" method="POST"
                                            onsubmit="return confirm('Yakin ingin menghapus produk ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-icon btn-danger"
                                                data-bs-toggle="tooltip" title="Hapus Data">
                                                <i class="ti ti-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center py-5 text-muted">
                                    <i class="ti ti-package-off ti-lg d-block mb-2"></i>
                                    Belum ada data produk tersedia.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
