<form action="/categories/update/{{ $categories->id }}" method="POST">
    @csrf
    @method('PUT')
    <label for="">Kategori</label>
    <br>
    <input type="text" name="category_name" id="" value="{{ $categories->category_name }}">
    <button type="submit">Update</button>
</form>
