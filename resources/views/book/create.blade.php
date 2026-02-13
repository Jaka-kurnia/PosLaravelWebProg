<form action="/book/store" method="POST">
    @csrf
    <label for="">Kode Buku</label>
    <br>
    <input type="text" name="kode_buku">
    <br>
    <label for="">Judul Buku</label>
    <br>
    <input type="text" name="judul_buku" id="">
    <br>
    <label for="">Stok</label>
    <br>
    <input type="text" name="stock" id="">
    <br>
    <button type="submit">Simpan</button>
</form>
