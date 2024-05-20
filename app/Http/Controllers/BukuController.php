<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use Illuminate\Support\Facades\Validator;

class BukuController extends Controller
{
    public function index()
    {
        $bukus = Buku::all();
        return view('buku.index', compact('bukus'));
    }

    public function create()
    {
        return view('buku.add');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required|string|max:200',
            'edisi' => 'required|string|max:50',
            'no_rak' => 'required|integer',
            'tahun' => 'required|date_format:Y',
            'penerbit' => 'required|string|max:100',
            'kd_penulis' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return redirect()->route('buku.create')
                ->withErrors($validator)
                ->withInput();
        }

        Buku::create($validator->validated());

        return redirect()->route('buku.index')
            ->with('success', 'Buku berhasil ditambahkan.');
    }

    public function show($id)
    {
        $buku = Buku::findOrFail($id);
        return view('buku.show', compact('buku'));
    }

    public function edit($id)
    {
        $buku = Buku::findOrFail($id);
        return view('buku.edit', compact('buku'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required|string|max:200',
            'edisi' => 'required|string|max:50',
            'no_rak' => 'required|integer',
            'tahun' => 'required|date_format:Y',
            'penerbit' => 'required|string|max:100',
            'kd_penulis' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return redirect()->route('buku.edit', $id)
                ->withErrors($validator)
                ->withInput();
        }

        $buku = Buku::findOrFail($id);
        $buku->update($validator->validated());

        return redirect()->route('buku.index')
            ->with('success', 'Buku berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $buku = Buku::findOrFail($id);
        $buku->delete();

        return redirect()->route('buku.index')
            ->with('success', 'Buku berhasil dihapus.');
    }
}
