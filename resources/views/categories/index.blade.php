<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Kategori</h1>
    <a href="{{ route('categories.create') }}">Tambah Data</a>
    <br>
    @if (session('success'))
        <div>{{ session('success') }}</div>
    @endif
    <br>

    <form action="/categories" method="GET">
        <input type="text" name="category_name" id="" placeholder="Nama Kategori"
            value="{{ Request('category_name') }}">
        <button type="submit"> Cari data</button>
    </form>
    <br>
    <table border="1" style="">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->category_name }}</td>
                    <td>
                        <a href="{{ route('categories.edit', $item->id) }}">
                            Edit
                        </a>
                        <form action="{{ route('categories.destroy', $item->id) }}" method="POST"
                            style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit"return
                                onclick="confirm('are you sure to delete data')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
