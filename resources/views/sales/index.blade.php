@extends('layouts.vuexy.vuexy')
@section('page_title', 'Penjualan')
@section('title', 'Manajemen Penjualan')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            {{-- Form select dan pencarian --}}
            {{-- <form action="{{ route('product.index') }}" method="GET" class="d-flex">
                <input type="text" name="product_name" class="form-control me-2" placeholder="Nama Produk"
                    value="{{ Request('product_name') }}">
                <select name="category_id" class="form-select me-2">
                    <option value="">Semua Kategori</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}"
                            {{ Request('category_id') == $category->id ? 'selected' : ' ' }}>
                            {{ $category->category_name }}
                        </option>
                    @endforeach
                </select>
                <button type="submit" class="btn btn-primary">
                    <i class="ti ti-search "></i>
                    Cari
                </button>
            </form> --}}
            {{-- End form --}}
            <a href="{{route('sales.create')}}" class="btn btn-primary" id="btnTambahData">
                <i class="ti ti-plus me-1"></i> Tambah Produk
            </a>
        </div>

        <div class="card-body">
            <div class="table-responsive text-nowrap">
                <table class="table table-hover">
                    <thead class="table-light">
                        <tr>
                            <th width="50px">No. Trans</th>
                            <th>Customer Name</th>
                            <th>Date</th>
                            <th>Total Amount</th>
                            <th class="text-center" width="150px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
                {{-- tampilkan paginate dan rapihkan  --}}
                {{-- <div class="d-flex  mt-4">
                    <ul class="pagination pagination-primary">
                        {{ $products->links() }}
                    </ul>
                </div> --}}
            </div>
        </div>
    </div>
@endsection
