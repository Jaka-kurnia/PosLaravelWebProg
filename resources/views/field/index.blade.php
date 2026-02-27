<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lapangan Data</title>
</head>

<body>
    <h1>Ini halaman Data Lapangan</h1>
    @if (session('success'))
        <p style="color: green">{{ session('success') }}</p>
    @endif
    <br>
    <a href="{{ route('field.create') }}">Tambah data</a>
    <br>
    <br>
    <table border="1" style="gap: 2px">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Lapangan</th>
                <th>Nama Lapangan</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($field as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->kode_lapang }}</td>
                    <td>{{ $item->nama_lapang }}</td>
                    <td>{{ $item->price }}</td>
                    <td>
                        <a href="{{ route('field.edit', $item->id) }}">Edit</a>
                        <form action="">

                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td>Data Kosong</td>
                </tr>
            @endforelse

        </tbody>
    </table>
</body>

</html>
