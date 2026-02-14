<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Halaman Buku</h1>
    <a href="/book/create">Tambah Data</a>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Buku</th>
                <th>Nama Buku</th>
                <th>Stock</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($book as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->kode_buku }}</td>
                    <td>{{ $item->judul_buku }}</td>
                    <td>{{ $item->stock }}</td>
                    <td>
                        <a href="/book/edit/{{ $item->id }}">Edit</a>
                        <a href="/book/delete/{{ $item->id }}">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
