@extends('layouts.vuexy.vuexy')
@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Tambah Kategori</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('categories.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="category_name" class="form-label">Nama Kategori</label>
                    <input type="text" class="form-control" id="category_name" name="category_name">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
@endsection
