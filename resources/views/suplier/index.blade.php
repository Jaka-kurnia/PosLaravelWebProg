@extends('layouts.vuexy.vuexy')
@section('page_title', 'Manajemen Supplier')
@section('title', 'Manajemen Supplier')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Daftar Supplier</h5>
            <a href="{{ route('suplier.create') }}" class="btn btn-primary">
                <i class="ti ti-plus me-1"></i> Tambah Data
            </a>
        </div>

        <div class="card-body">
            <div class="table-responsive text-nowrap">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th width="50px">No</th>
                            <th>Kode Supplier</th>
                            <th>Nama Supplier</th>
                            <th>Alamat</th>
                            <th>No. Telepon</th>
                            <th class="text-center" width="200px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @forelse ($supliers as $index => $item)
                            <tr>
                                <td><strong>{{ $index + 1 }}</strong></td>
                                <td><span class="badge bg-label-info">{{ $item->suplier_code }}</span></td>
                                <td>{{ $item->suplier_name }}</td>
                                <td>{{ Str::limit($item->address, 40) }}</td>
                                <td>{{ $item->phone }}</td>
                                <td class="text-center">
                                    <div class="d-flex justify-content-center gap-2">
                                        <a href="{{ route('suplier.edit', $item->id) }}"
                                            class="btn btn-sm btn-icon btn-warning" title="Edit">
                                            <i class="ti ti-edit"></i>
                                        </a>

                                        {{-- Form Hapus (Sesuai Standar Laravel) --}}
                                        <form action="{{ route('suplier.destroy', $item->id) }}" method="POST"
                                            onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-icon btn-danger" title="Hapus">
                                                <i class="ti ti-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center text-muted">
                                    <div class="py-4">
                                        <i class="ti ti-alert-circle ti-lg mb-2"></i>
                                        <p>Tidak ada data supplier ditemukan.</p>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
