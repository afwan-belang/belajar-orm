<?php

namespace App\Http\Controllers;

use App\Models\Proyek;
use App\Models\Karyawan;
use Illuminate\Http\Request;

class ProyekController extends Controller
{
    // Menampilkan form tambah proyek untuk karyawan tertentu
    public function create($karyawan_id)
    {
        $karyawan = Karyawan::findOrFail($karyawan_id);
        return view('proyek.tambah', compact('karyawan'));
    }

    // Menyimpan data proyek baru
    public function store(Request $request, $karyawan_id)
    {
        $request->validate([
            'nama_proyek' => 'required|string|max:255',
        ]);

        Proyek::create([
            'karyawan_id' => $karyawan_id,
            'nama_proyek' => $request->nama_proyek,
            'status' => 'Berjalan' // Status default saat pertama dibuat
        ]);

        return redirect()->route('karyawan')->with('success', 'Proyek berhasil ditambahkan!');
    }

    // Mengupdate status proyek secara langsung
    public function updateStatus(Request $request, $id)
    {
        $proyek = Proyek::findOrFail($id);
        
        $request->validate([
            'status' => 'required|in:Berjalan,Hampir Selesai,Selesai'
        ]);

        $proyek->update([
            'status' => $request->status
        ]);

        return redirect()->route('karyawan');
    }
}