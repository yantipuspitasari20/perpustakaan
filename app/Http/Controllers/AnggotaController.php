<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;
use Illuminate\Support\Facades\Validator;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
    */
    public function index()
    {
        // Retrieve all anggota
        $anggota = Anggota::all();
        return view('anggota.index', compact('anggota'));
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('anggota.add');
    }

    /**
     * Store a newly created resource in storage.
     */



    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'no_hp' => 'required|string|max:15',
            'alamat' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:anggota',
        ]);

        // Check count of records with the same email
        $email = $request->input('email');
        $count = Anggota::where('email', $email)->count();

        if ($count > 0) {
            return redirect()->back()->withErrors(['email' => 'Email sudah digunakan.'])->withInput();
        }

        // Create a new Anggota instance
        Anggota::create($request->all());

        return redirect()->route('anggota.index')->with('success', 'Anggota berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $anggota = Anggota::findOrFail($id);
        return view('anggota.show', compact('anggota'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
{
    $anggota = Anggota::findOrFail($id);
    return view('anggota.edit', compact('anggota'));
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required','string','max:255',
            'no_hp' => 'required','string','max:15',
            'alamat' => 'required','string','max:255',
            'email' => 'required','string','email','max:255','unique','anggota','email' .$id,
        ]);
    
        // Mendapatkan anggota berdasarkan ID
        $anggota = Anggota::findOrFail($id);
        $anggota->update($request->all());
    
        // Mengembalikan response
        return redirect()->route('anggota.index')->with('success', 'Anggota berhasil diperbarui.');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $anggota = Anggota::findOrFail($id);
        $anggota->delete();

        return redirect()->route('anggota.index')->with('success', 'Anggota berhasil dihapus.');
    }
}
