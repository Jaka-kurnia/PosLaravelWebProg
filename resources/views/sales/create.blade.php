@extends('layouts.vuexy.vuexy')
@section('page_title', 'Create Transaksi Penjualan')
@section('title', 'Manajemen Penjualan')
@section('content')
    <form action="">
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        {{-- Input Transaksi --}}
                        <label class="form-label text-muted small fw-medium">No Transaksi</label>
                        <div class="input-group input-group-merge">
                            <span class="input-group-text"><i class="ti ti-hash"></i></span>
                            <input type="text" class="form-control" id="no_transection">
                        </div>
                        {{-- End Input --}}
                        {{-- Date --}}
                        <label class="form-label text-muted small fw-medium">Date</label>
                        <div class="input-group input-group-merge">
                            <span class="input-group-text"><i class="ti ti-hash"></i></span>
                            <input type="text" class="form-control" id="date">
                        </div>
                        {{-- End date --}}
                        {{-- Select --}}
                        <label class="form-label text-muted small fw-medium">Customer</label>
                        <div class="input-group input-group-merge">
                            <span class="input-group-text"><i class="ti ti-list"></i></span>
                            <select class="form-select" name="customer_id" id="customer_id">
                                <option value="" selected disabled>— Pilih customer —</option>
                                @foreach ($customers as $item)
                                    <option value="{{ $item->id }}">{{ $item->customer_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        {{-- End select --}}
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="card" style="height: 170px">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <i class="ti ti-shopping-cart" style="font-size: 90px"></i>
                            </div>
                            <div style="font-size: 75px">
                                Rp. 200.000
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-10">
                <label class="form-label text-muted small fw-medium">Tambah Produk</label>
                <div class="input-group input-group-merge">
                    <span class="input-group-text"><i class="ti ti-list"></i></span>
                    <select class="form-select" name="product_id" id="product_id">
                        <option value="" selected disabled>— Pilih Produk —</option>
                        @foreach ($products as $item)
                            <option value="{{ $item->id }}" data-id="{{ $item->id }}"
                                data-product_code="{{ $item->product_code }}" data-product_name="{{ $item->product_name }}"
                                data-price="{{ $item->price }}" data-unit="{{ $item->unit }}">
                                {{ $item->product_name }} - Rp. {{ $item->price }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-2">
                <a href="#" class="btn btn-primary text-white" style="margin-top: 32px;" id="btnAdd">Tambah</a>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <table class="table table-bordered table-striped" id="tableDetail">
                    <thead>
                        <tr>
                            <th>Produk Code</th>
                            <th>Nama Produk</th>
                            <th>Qty</th>
                            <th>Harga</th>
                            <th>SubTotal</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </form>
@endsection
@push('myscripts')
    <script>
        $(function() {
            $('#btnAdd').click(function(e) {
                e.preventDefault();
                let productSelected = $("#product_id option:selected");
                let productCode = productSelected.attr("product_code");
                let productName = productSelected.attr("product_name");
                let price = productSelected.attr("price");
                let unit = productSelected.attr("unit");

                let row = `<tr>
                <td>${productCode}</td>
                <td>${productName}</td>
                <td></td>
                <td></td>
                <td></td>
                </tr>`;
                $("#tableDetail tbody").append(row);
            });
        })
    </script>
@endpush
