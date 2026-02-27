<form action="{{ route('product.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="">Nama Kategori</label>
    <br>
    <select name="category_id" id="category_id">
        <option value="">Pilih Kategori</option>
        @foreach ($categories as $item)
            <option value="{{ $item->id }}">{{ $item->category_name }}</option>
        @endforeach
    </select>
    <br>
    <label for="">Kode Produk</label>
    <br>
    <input type="text" name="product_code" id="" value="{{ $product->product_code }}">
    <br>
    <label for="">Nama Produk</label>
    <br>
    <input type="text" name="product_name" id="" value="{{ $product->product_name }}">
    <br>
    <label for="">Harga</label>
    <br>
    <input type="text" name="price" id="" value="{{ $product->price }}">
    <br>
    <label for="">Unit</label>
    <br>
    <input type="text" name="unit" id="" value="{{ $product->unit }}">
    <br>
    <button type="submit">Update</button>
</form>