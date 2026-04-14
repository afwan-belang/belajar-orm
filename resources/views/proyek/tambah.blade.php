@extends('layouts.main')

@section('content')
    <div class="max-w-2xl mx-auto mt-10">
        <div class="mb-6">
            <h2 class="text-2xl font-bold text-slate-800">Tambah Proyek Baru</h2>
            <p class="text-slate-500">Menugaskan proyek untuk karyawan: <span class="font-semibold text-indigo-600">{{ $karyawan->nama }}</span></p>
        </div>
        
        <div class="mb-4">
            <a href="{{ route('karyawan') }}" class="text-sm text-indigo-600 hover:text-indigo-800 font-medium">&larr; Kembali ke Daftar Karyawan</a>
        </div>

        <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200">
            <form action="{{ route('proyek.store', $karyawan->id) }}" method="POST">
                @csrf
                <div class="mb-5">
                    <label for="nama_proyek" class="block text-sm font-medium text-slate-700 mb-2">Nama Proyek</label>
                    <input type="text" name="nama_proyek" id="nama_proyek" placeholder="Contoh: Aplikasi Monitoring Lingkungan" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all" required>
                </div>
                
                <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-2.5 px-4 rounded-lg transition duration-200 cursor-pointer">
                    Simpan Proyek
                </button>
            </form>
        </div>
    </div>
@endsection