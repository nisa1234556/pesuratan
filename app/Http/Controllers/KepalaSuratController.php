<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KepalaSurat;
use App\Models\User;

class KepalaSuratController extends Controller
{
    public function index()
    {
        $kepalaSurats = KepalaSurat::all();
        return view('kepala_surat.index', compact('kepalaSurats'));
    }

    public function create()
    {
        return view('kepala_surat.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_kop' => 'required|string|max:250',
            'alamat_kop' => 'required|string',
            'nama_tujuan' => 'required|string|max:200',
            'id_user' => 'required|exists:users,id',
        ]);

        KepalaSurat::create($validatedData);

        return redirect()->route('kepala_surat.index')->with('success', 'Kepala Surat berhasil ditambahkan.');
    }

    public function show($id_kop)
    {
        $kepalaSurat = KepalaSurat::with('user')->findOrFail($id_kop);
        return view('kepala_surat.show', compact('kepalaSurat'));
    }

    public function edit($id_kop)
    {
        $kepalaSurat = KepalaSurat::findOrFail($id_kop);
        $users = User::all();
        return view('kepala_surat.edit', compact('kepalaSurat', 'users'));
    }

    public function update(Request $request, $id_kop)
    {
        $validatedData = $request->validate([
            'nama_kop' => 'required|string|max:250',
            'alamat_kop' => 'required|string',
            'nama_tujuan' => 'required|string|max:200',
            'id_user' => 'required|exists:users,id',
        ]);

        $kepalaSurat = KepalaSurat::findOrFail($id_kop);
        $kepalaSurat->update($validatedData);

        return redirect()->route('kepala_surat.index')->with('success', 'Kepala Surat berhasil diperbarui.');
    }

    public function destroy($id_kop)
    {
        $kepalaSurat = KepalaSurat::findOrFail($id_kop);
        $kepalaSurat->delete();

        return redirect()->route('kepala_surat.index')->with('success', 'Kepala Surat berhasil dihapus.');
    }
}
