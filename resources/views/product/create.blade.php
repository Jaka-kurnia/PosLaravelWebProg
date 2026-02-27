<form action="{{ route('product.store') }}" method="POST">
    @csrf
    <label for="">Nama Kategori</label>
    <br>
    <select name="category_id" id="category_id">
        <option value="">Pilih Kategori</option>
        @foreach ($categories as $item)
            <option value="{{ $item->id }}">{{ $item->category_name }}</option>
        @endforeach
    </select>
    <br>
    <input type="hidden" name>
    <label for="">Kode Produk</label>
    <br>

    <input type="text" name="product_code" id="">
    <br>
    <label for="">Nama Produk</label>
    <br>
    <input type="text" name="product_name" id="">
    <br>
    <label for="">Harga</label>
    <br>
    <input type="text" name="price" id="">
    <br>
    <label for="">Unit</label>
    <br>
    <input type="text" name="unit" id="">
    <br>
    <button type="submit">Simpan</button>
</form>
