@extends('layouts.app')

@section('title', 'Menu Makanan')

@section('content')
<br>
<h3>Tambah Menu Baru</h3><hr><br>

<form action="/foods/store" method="POST">
    @csrf
    <label for="nama">Nama:</label>
    <input type="text" name="nama" required><br><br>

    <label for="harga">Harga:</label>
    <input type="number" name="harga" required><br><br>

    <label for="category_id">Kategori:</label>
    <select name="category_id" required>
        <option value="1">Appetizer</option>
        <option value="2">Main Course</option>
        <option value="3">Dessert</option>
    </select><br><br>

    <input type="submit" value="Simpan" onclick="return confirm('Yakin Ingin Menambahkan Data ini?')">
</form>

</body>
</html>
@endsection
