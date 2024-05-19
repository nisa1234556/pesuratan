<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuratKeluar;
use App\Models\User;

class SuratKeluarController extends Controller
{
    public function index()
    {
        $suratKeluar = SuratKeluar::all();
        return view('surat_keluar.index', compact('suratKeluar'));
    }

    public function create()
    {
        $users = User::all();
        return view('surat_keluar.create', compact('users'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'no_surat' => 'required|string|max:200',
            'perihal' => 'required|string|max:150',
            'tujuan' => 'required|string|max:50',
            'isi_surat' => 'required|string',
        ]);

        SuratKeluar::create($validatedData);
        return redirect()->route('surat_keluar.index')->with('success', 'Surat keluar berhasil ditambahkan.');
    }

    public function show($id_kops)
    {
        $suratKeluar = SuratKeluar::findOrFail($id_kops);
        return view('surat_keluar.show', compact('suratKeluar'));
    }

    public function edit($id_kops)
    {
        $suratKeluar = SuratKeluar::findOrFail($id_kops);
        return view('surat_keluar.edit', compact('suratKeluar'));
    }

    public function update(Request $request, $id_kops)
    {
        $validatedData = $request->validate([
            'no_surat' => 'required|string|max:200',
            'perihal' => 'required|string|max:150',
            'tujuan' => 'required|string|max:50',
            'isi_surat' => 'required|string',
        ]);

        $suratKeluar = SuratKeluar::findOrFail($id_kops);
        $suratKeluar->update($validatedData);
        return redirect()->route('surat_keluar.index')->with('success', 'Surat keluar berhasil diperbarui.');
    }

    public function destroy($id)
    {
        SuratKeluar::destroy($id);
        return redirect()->route('surat_keluar.index')->with('success', 'Surat keluar berhasil dihapus.');
    }
}
