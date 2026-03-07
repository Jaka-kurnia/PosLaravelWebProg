<form action="{{ route('suplier.store') }}" method="POST">
    @csrf
    <br>
    <input type="hidden" name>
    <label for="">Kode Supllier</label>
    <br>

    <input type="text" name="suplier_code" id="">
    @error('suplier_code')
        {{ $message }}
    @enderror
    <br>
    <label for="">Nama Supllier</label>
    <br>
    <input type="text" name="suplier_name" id="">
    @error('suplier_name')
        {{ $message }}
    @enderror
    <br>
    <label for="">Address</label>
    <br>
    <input type="text" name="address" id="">
    @error('address')
        {{ $message }}
    @enderror
    <br>
    <label for="">Phone</label>
    <br>
    <input type="text" name="phone" id="">
    @error('phone')
        {{ $message }}
    @enderror
    <br>
    <button type="submit">Simpan</button>
</form>
