<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Daftar Penulis & Buku</h1>

    @foreach ($semua_penulis as $penulis)
        <h3>Penulis: {{ $penulis->name }}</h3>

        <ul>
            @foreach ($penulis->books as $buku)
                <li>Judul: {{ $buku->judul_buku }}</li>
            @endforeach
        </ul>
        <hr>
    @endforeach
</body>

</html>
