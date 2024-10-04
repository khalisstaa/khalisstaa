<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\FoodsModel;

class MenuController extends Controller
{
    public function index()
    {
        $foods = FoodsModel::all();
        return view("index", compact("foods"));
    }

    public function tambah()
    {
        return view('tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'category_id' => 'required|exists:category,id',
        ]);

        DB::table('foods')->insert([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'category_id' => $request->category_id,
        ]);

        return redirect('/menu')->with('success', 'Item berhasil ditambahkan');
    }

    public function edit($id)
    {
        $food = FoodsModel::find($id);
        return view('edit', compact('food'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'category_id' => 'required|exists:category,id',
        ]);

        DB::table('foods')
            ->where('id', $id)
            ->update([
                'nama' => $request->nama,
                'harga' => $request->harga,
                'category_id' => $request->category_id,
            ]);

        return redirect('/menu')->with('success', 'Item berhasil diupdate');
    }

    public function hapus($id)
    {
        DB::table('foods')->where('id', $id)->delete();

        return redirect('/menu')->with('success', 'Item berhasil dihapus');
    }
    
}
