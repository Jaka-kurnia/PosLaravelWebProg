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

    <table>
        <thead>
            <th>
                <td>No</td>
                <td>Nama Kategori</td>
            </th>
        </thead>
        <tbody>
            @foreach ($categories as $item )
                <td>{{ $item->id }}</td>
                {{-- <td>{{ $item-> }}</td> --}}
            @endforeach
        </tbody>
    </table>
</body>
</html>