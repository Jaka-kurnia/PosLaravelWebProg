<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Supllier</title>
</head>

<body>
    <h1>Halaman Supllier</h1>
    <a href="{{ route('suplier.create') }}">Tambah Supllier</a>
    <br>
    @if (session('success'))
        <div>{{ session('success') }}</div>
    @endif
    <br>
    <form action="/suplier" method="GET">
        <input type="text" name="suplier_name" id="" placeholder="Nama Supllier"
            value="{{ Request('suplier_name') }}">
        <button type="submit"> Cari data</button>
    </form>

    <br>

    <table border="1" style="">
        <thead border=>
            <tr>
                <th>No</th>
                <th>Kode Supllier</th>
                <th>Nama Supllier</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($supliers as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->suplier_code }}</td>
                    <td>{{ $item->suplier_name }}</td>
                    <td>{{ $item->address }}</td>
                    <td>{{ $item->phone }}</td>
                    <td>
                        <a href="{{ route('suplier.edit', $item->id) }}">
                            Edit
                        </a>
                        <form action="{{ route('suplier.destroy', $item->id) }}" method="POST"
                            style="display: inline">
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
