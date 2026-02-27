<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Products</title>
</head>

<body>
    <h1>Halaman Produk</h1>
    <a href="{{ route('product.create') }}">Tambah Produk</a>
    <br>
    @if (session('success'))
        <div>{{ session('success') }}</div>
    @endif
<br>
    <form action="/product" method="GET">
        <input type="text" name="product_name" id="" placeholder="Nama Produk"
            value="{{ Request('product_name') }}">
        <button type="submit"> Cari data</button>
    </form>
    
    <br>

    <table border="1" style="">
        <thead border=>
            <tr>
                <th>No</th>
                <th>Nama Kategori</th>
                <th>Kode Produk</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Unit</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->category_name }}</td>
                    <td>{{ $item->product_code }}</td>
                    <td>{{ $item->product_name }}</td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->unit }}</td>
                    <td>
                        <a href="{{ route('product.edit', $item->id) }}">
                            Edit
                        </a>
                        <form action="{{ route('product.destroy', $item->id) }}" method="POST" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Are you sure you want to delete this data?')">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
