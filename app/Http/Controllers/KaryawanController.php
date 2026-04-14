<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    // READ
    // READ (Dengan Search & Pagination)
    public function index(Request $request)
    {
        // Menangkap inputan pencarian dari URL (?search=...)
        $search = $request->input('search');

        // Query dengan Eager Loading, Search, dan Pagination
        $karyawan = Karyawan::with('proyeks')
            ->when($search, function ($query, $search) {
                // Mencari berdasarkan nama atau posisi
                return $query->where('nama', 'like', "%{$search}%")
                             ->orWhere('posisi', 'like', "%{$search}%");
            })
            // Menampilkan 5 data per halaman
            ->paginate(5)
            // withQueryString() agar saat pindah halaman, parameter search tidak hilang
            ->withQueryString(); 

        return view('karyawan.index', compact('karyawan', 'search'));
    }

    public function show()
    {
        return view('karyawan.tambah');
    }

    // CREATE
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'posisi' => 'required'
        ]);
    
        Karyawan::create([
            'nama' => $validatedData['nama'],
            'posisi' => $validatedData['posisi']
        ]);

        return redirect('/karyawan');
    }

    public function edit($id)
    {
        $karyawan = Karyawan::findOrFail($id);

        return view('karyawan.edit', ['karyawan' => $karyawan]);
    }

    // UPDATE
    public function update(Request $request, $id)
    {
        $karyawan = Karyawan::findOrFail($id);

        $request->validate([
            'nama' => 'required',
            'posisi' => 'required'
        ]);
        
        $karyawan->update([
            'nama' => $request->nama,
            'posisi' => $request->posisi
        ]);

        return redirect('/karyawan');
    }

    // DELETE
    public function destroy($id)
    {
        Karyawan::destroy($id);

        return redirect('/karyawan');
    }
}
