<form action="{{ route('suplier.update', $suplier->id) }}" method="POST">
    @csrf
    @method('PUT')
        <br>
        <label for="">Kode Suplier</label>
        <br>
        <input type="text" name="suplier_code" id="" value="{{ $suplier->suplier_code }}">
        <br>
        <label for="">Nama Suplier</label>
        <br>
        <input type="text" name="suplier_name" id="" value="{{ $suplier->suplier_name }}">
        <br>
        <label for="">Alamat</label>
        <br>
        <input type="text" name="address" id="" value="{{ $suplier->address }}">
        <br>
        <label for="">Telepon</label>
        <br>
        <input type="text" name="phone" id="" value="{{ $suplier->phone }}">
        <br>
        <button type="submit">Update</button>
</form>
