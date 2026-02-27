<form action="{{ route('field.update', $field->id) }}" method="POST">
    @csrf
    @method("PUT")
    <label for="">Kode Lapangan</label>
    <input type="text" name="kode_lapang" value="{{ $field->kode_lapang }}">
    <br>
    <br>
    <label for="">Nama Lapangan</label>
    <input type="text" name="nama_lapang" value="{{ $field->nama_lapang }}">
    <br>
    <br>
    <label for="">Harga</label>
    <input type="number" name="price" value="{{ $field->price }}">
    <br>
    <br>
    <button type="submit">Update</button>
</form>
