<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Penulis;
use App\Models\Rak;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        $buku = Buku::all();
        return view('buku.index', compact('buku'));
    }

    public function create()
    {
        $rak = Rak::all();
        $penulis = Penulis::all();
        return view('buku.create', compact('penulis', 'rak'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:200',
            'edisi' => 'required|string|max:50',
            'no_rak' => 'required|integer',
            'tahun' => 'required|date',
            'penerbit' => 'required|string|max:100',
            'kd_penulis' => 'required|integer',
        ]);

        Buku::create($request->all());

        return redirect()->route('buku.index')->with('success', 'Buku berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $buku = Buku::findOrFail($id);
        $penulis = Penulis::all(); 
        $rak = Rak::all();  // Assuming Rak model has 'books' relationship
        return view('buku.edit', compact('buku', 'penulis',"rak"));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:200',
            'edisi' => 'required|string|max:50',
            'no_rak' => 'required|integer',
            'tahun' => 'required|date',
            'penerbit' => 'required|string|max:100',
            'kd_penulis' => 'required|integer',
        ]);

        $buku = Buku::findOrFail($id);
        $buku->update($request->all());

        return redirect()->route('buku.index')->with('success', 'Buku berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $buku = Buku::findOrFail($id);
        $buku->delete();

        return redirect()->route('buku.index')->with('success', 'Buku berhasil dihapus');
    }
}
