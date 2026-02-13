<form action="/book/update/{{ $book->id }}" method="POST">
    @csrf
    @method('PUT')
    <label for="">Kode Buku</label>
    <br>
    <input type="text" name="kode_buku" value="{{ $book->kode_buku }}">
    <br>
    <label for="">Judul Buku</label>
    <br>
    <input type="text" name="judul_buku" value="{{ $book->judul_buku }}">
    <br>
    <label for="">Stock</label>
    <br>
    <input type="text" name="stock" value="{{ $book->stock }}">
    <br>
    <button type="submit">Update</button>
</form>
