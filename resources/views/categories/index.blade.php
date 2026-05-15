@extends('layouts.vuexy.vuexy')
@section('page_title', 'Manajemen Kategori')
@section('title', 'Manajemen Kategori')

@section('content')
    <div class="card">

        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Daftar Kategori Produk</h5>
            <a href="{{ route('categories.create') }}" class="btn btn-primary">
                <i class="ti ti-plus me-1"></i> Tambah Kategori
            </a>
        </div>

        <div class="card-body">
            <div class="table-responsive text-nowrap">
                <table class="table table-hover">
                    <thead class="table-light">
                        <tr>
                            <th width="70px">No</th>
                            <th>Nama Kategori</th>
                            <th class="text-center" width="200px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @forelse ($categories as $index => $item)
                            <tr>
                                <td><span class="fw-bold">{{ $index + 1 }}</span></td>
                                <td>{{ $item->category_name }}</td>
                                <td class="text-center">
                                    <div class="d-flex justify-content-center gap-2">
                                        {{-- Tombol Edit --}}
                                        <a href="{{ route('categories.edit', $item->id) }}"
                                            class="btn btn-sm btn-icon btn-warning" data-bs-toggle="tooltip"
                                            title="Edit Kategori">
                                            <i class="ti ti-edit"></i>
                                        </a>
                                        <form action="{{ route('categories.destroy', $item->id) }}" method="POST"
                                            onsubmit="return confirm('Apakah Anda yakin ingin menghapus kategori ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-icon btn-danger"
                                                data-bs-toggle="tooltip" title="Hapus Kategori">
                                                <i class="ti ti-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="text-center py-5 text-muted">
                                    <div class="d-flex flex-column align-items-center">
                                        <i class="ti ti-category-2 ti-lg mb-2"></i>
                                        <span>Belum ada data kategori.</span>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="modal fade" id="kategoriModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="title">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="loadForm">

                </div>
            </div>
        </div>
    </div>
@endsection
