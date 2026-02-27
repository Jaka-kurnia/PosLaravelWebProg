<form action="{{ route('field.store') }}" method="POST">
    @csrf
    <label for="">Kode Lapangan</label>
    <input type="text" name="kode_lapang">
    <br>
    <br>
    <label for="">Nama Lapangan</label>
    <input type="text" name="nama_lapang">
    <br>
    <br>
    <label for="">Harga</label>
    <input type="number" name="price">
    <br>
    <br>
    <button type="submit">Simpan</button>
</form>
