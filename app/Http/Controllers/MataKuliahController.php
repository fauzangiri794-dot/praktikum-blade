<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    // Menampilkan seluruh data mata kuliah
    public function index()
    {
        $matakuliahs = MataKuliah::orderBy('kode_matakuliah')->get();

        return view('matakuliah.index', compact('matakuliahs'));
    }

    // Menampilkan formulir tambah mata kuliah
    public function create()
    {
        return view('matakuliah.create');
    }

    // Menyimpan data mata kuliah
    public function store(Request $request)
    {
        $request->validate([
            'kode_matakuliah' => 'required|string|max:20|unique:mata_kuliahs,kode_matakuliah',
            'nama_matakuliah' => 'required|string|max:100',
            'sks' => 'required|integer|min:1|max:6',
        ]);

        MataKuliah::create([
            'kode_matakuliah' => $request->kode_matakuliah,
            'nama_matakuliah' => $request->nama_matakuliah,
            'sks' => $request->sks,
        ]);

        return redirect()->route('matakuliah.index')
            ->with('success', 'Data mata kuliah berhasil ditambahkan.');
    }

    // Menampilkan detail mata kuliah
    public function show($id)
    {
        $matakuliah = MataKuliah::findOrFail($id);

        return view('matakuliah.show', compact('matakuliah'));
    }
}
