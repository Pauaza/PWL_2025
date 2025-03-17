<?php

namespace App\Http\Controllers;

use App\Models\KategoriModel;
use Illuminate\Http\Request;
use App\DataTables\KategoriDataTable;

class KategoriController extends Controller
{
    public function index(KategoriDataTable $dataTable)
    {
        return $dataTable->render('kategori.index');
    }

    public function create()
    {
        return view('kategori.create');
    }

    public function store(Request $request)
    {
        KategoriModel::create([
            'kategori_kode' => $request->kodeKategori,
            'kategori_nama' => $request->namaKategori,
        ]);

        return redirect('/kategori');
    }
    public function edit($id)
{
    $kategori = KategoriModel::findOrFail($id);
    return view('kategori.edit', compact('kategori'));
}

public function update(Request $request, $id)
{
    // Validasi input
    $request->validate([
        'kodeKategori' => 'required|string|max:255',
        'namaKategori' => 'required|string|max:255',
    ]);

    // Ambil data kategori berdasarkan ID
    $kategori = KategoriModel::findOrFail($id);
    
    // Update data
    $kategori->kategori_kode = $request->kodeKategori;
    $kategori->kategori_nama = $request->namaKategori;
    $kategori->save();

    // Redirect kembali dengan pesan sukses
    return redirect()->route('kategori.index')->with('success', 'Kategori berhasil diperbarui');
}
public function destroy($id)
{
    $kategori = KategoriModel::findOrFail($id);
    $kategori->delete();

    return redirect()->route('kategori.index')->with('success', 'Kategori berhasil dihapus.');
}


}
