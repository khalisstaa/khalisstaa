@extends('layouts.app')

@section('title', 'Menu Makanan')

@section('content')
<br>
<h3>Edit Menu Makanan</h3><hr><br>

<form action="/menu/update/{{ $food->id }}" method="POST">
    @csrf
    <label for="nama">Nama:</label>
    <input type="text" name="nama" value="{{ $food->nama }}" required><br><br>

    <label for="harga">Harga:</label>
    <input type="number" name="harga" value="{{ $food->harga }}" required><br><br>

    <label for="category_id">Kategori:</label>
    <select name="category_id" required>
        <option value="1" {{ $food->category_id == 1 ? 'selected' : '' }}>Appetizer</option>
        <option value="2" {{ $food->category_id == 2 ? 'selected' : '' }}>Main Course</option>
        <option value="3" {{ $food->category_id == 3 ? 'selected' : '' }}>Dessert</option>
    </select><br><br>

    <input type="submit" value="Update"onclick="return confirm('Yakin Ingin Mengganti Item Ini?')">
</form>
</form>

</body>
</html>
@endsection
