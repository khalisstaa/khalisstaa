@extends('layouts.app')

@section('title', 'Menu Makanan')

@section('content')
<br>
<div class="container">
    <h3 class="my-4">Menu Makanan</h3><hr>

    <a href="/menu/tambah" class="btn btn-primary mb-3">+ Tambah Menu Baru</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Harga</th>
                <th>Kategori</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($foods as $food)
                <tr>
                    <td>{{ $food->nama }}</td>
                    <td>{{ $food->harga }}</td>
                    <td>{{ $food->getCategory->nama_category }}</td>
                    <td>
                        <a href="/menu/edit/{{ $food->id }}" class="btn btn-dark btn-sm">Edit</a>
                        <a href="/menu/hapus/{{ $food->id }}" class="btn btn-light btn-sm" onclick="return confirm('Yakin Ingin Menghapus Item Ini?')">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
