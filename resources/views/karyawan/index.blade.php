@extends('layouts.main')

@section('content')
    <div class="mb-8 flex flex-col sm:flex-row justify-between items-start sm:items-center bg-white/70 dark:bg-slate-800/60 backdrop-blur-xl p-6 rounded-2xl shadow-lg shadow-slate-200/40 dark:shadow-none border border-white/60 dark:border-slate-700/50">
        <div class="mb-4 sm:mb-0">
            <h2 class="text-3xl font-extrabold text-slate-800 dark:text-white tracking-tight">Manajemen SDM & Proyek</h2>
            <p class="text-sm text-slate-500 dark:text-slate-400 mt-1">Kelola data karyawan beserta proyek yang sedang mereka tangani.</p>
        </div>
        <button onclick="openModalKaryawan()" class="bg-indigo-600/90 hover:bg-indigo-600 dark:bg-indigo-500/90 dark:hover:bg-indigo-500 backdrop-blur-md text-white font-semibold py-2.5 px-5 rounded-xl shadow-sm transition-all duration-300 ease-in-out flex items-center gap-2 transform hover:-translate-y-0.5 cursor-pointer border border-indigo-400/50 dark:border-indigo-400/30">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
            </svg>
            Tambah Karyawan
        </button>
    </div>

    <div class="mb-6">
        <form action="{{ route('karyawan') }}" method="GET" class="flex flex-col sm:flex-row gap-3">
            <div class="relative flex-grow sm:max-w-md">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-slate-400 dark:text-slate-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                    </svg>
                </div>
                <input type="text" name="search" value="{{ $search ?? '' }}" placeholder="Cari nama atau posisi karyawan..." class="block w-full pl-10 pr-3 py-2.5 border border-white/60 dark:border-slate-700/50 rounded-xl leading-5 bg-white/50 dark:bg-slate-800/50 backdrop-blur-md text-slate-800 dark:text-slate-200 placeholder-slate-400 dark:placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 transition-all duration-200 sm:text-sm shadow-sm">
            </div>
            
            <div class="flex gap-2">
                <button type="submit" class="bg-slate-800/90 dark:bg-slate-700/90 hover:bg-slate-900 dark:hover:bg-slate-600 backdrop-blur-md text-white px-5 py-2.5 rounded-xl font-medium transition-colors duration-200 cursor-pointer border border-slate-700/50">
                    Cari Data
                </button>
                
                @if(isset($search) && $search != '')
                    <a href="{{ route('karyawan') }}" class="bg-white/50 dark:bg-slate-800/50 hover:bg-white/80 dark:hover:bg-slate-700/80 backdrop-blur-md border border-white/60 dark:border-slate-700/50 text-slate-700 dark:text-slate-300 px-5 py-2.5 rounded-xl font-medium transition-colors duration-200 flex items-center">
                        Reset
                    </a>
                @endif
            </div>
        </form>
    </div>

    <div class="bg-white/60 dark:bg-slate-800/40 backdrop-blur-xl rounded-2xl shadow-lg shadow-slate-200/40 dark:shadow-none overflow-hidden border border-white/60 dark:border-slate-700/50">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead class="bg-slate-50/50 dark:bg-slate-800/50 border-b border-slate-200/50 dark:border-slate-700/50">
                    <tr>
                        <th class="px-6 py-4 font-semibold text-slate-700 dark:text-slate-300 text-sm uppercase tracking-wider w-1/3">Info Karyawan</th>
                        <th class="px-6 py-4 font-semibold text-slate-700 dark:text-slate-300 text-sm uppercase tracking-wider w-1/2">Proyek yang Ditangani</th>
                        <th class="px-6 py-4 font-semibold text-slate-700 dark:text-slate-300 text-sm uppercase tracking-wider text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100/50 dark:divide-slate-700/50">
                    @forelse ($karyawan as $p)
                        <tr class="hover:bg-white/40 dark:hover:bg-slate-700/30 transition-colors duration-200 ease-in-out">
                            <td class="px-6 py-5 align-top">
                                <div class="font-bold text-slate-800 dark:text-slate-100 text-lg">{{ $p->nama }}</div>
                                <div class="text-sm text-slate-500 dark:text-slate-400 flex items-center gap-1.5 mt-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-indigo-500 dark:text-indigo-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                    {{ $p->posisi }}
                                </div>
                            </td>
                            
                            <td class="px-6 py-5 align-top">
                                @if($p->proyeks->count() > 0)
                                    <ul class="space-y-3 mb-3">
                                        @foreach($p->proyeks as $proyek)
                                            <li class="flex flex-wrap items-center justify-between bg-white/70 dark:bg-slate-700/50 backdrop-blur-sm p-3 rounded-xl border border-white/80 dark:border-slate-600/50 shadow-sm gap-2">
                                                <span class="text-sm font-semibold text-slate-700 dark:text-slate-200">{{ $proyek->nama_proyek }}</span>
                                                
                                                <form action="{{ route('proyek.updateStatus', $proyek->id) }}" method="POST" class="m-0">
                                                    @csrf
                                                    @method('PUT')
                                                    <select name="status" onchange="this.form.submit()" 
                                                        class="text-xs font-bold rounded-full px-3 py-1.5 border border-transparent shadow-sm cursor-pointer focus:ring-2 focus:ring-indigo-500 appearance-none text-center dark:bg-slate-800
                                                        {{ $proyek->status == 'Berjalan' ? 'bg-blue-100/80 text-blue-700 dark:bg-blue-900/50 dark:text-blue-300 dark:border-blue-700/50' : '' }}
                                                        {{ $proyek->status == 'Hampir Selesai' ? 'bg-amber-100/80 text-amber-700 dark:bg-amber-900/50 dark:text-amber-300 dark:border-amber-700/50' : '' }}
                                                        {{ $proyek->status == 'Selesai' ? 'bg-emerald-100/80 text-emerald-700 dark:bg-emerald-900/50 dark:text-emerald-300 dark:border-emerald-700/50' : '' }}">
                                                        
                                                        <option value="Berjalan" class="bg-white dark:bg-slate-800 text-slate-900 dark:text-white" {{ $proyek->status == 'Berjalan' ? 'selected' : '' }}>⏳ Berjalan</option>
                                                        <option value="Hampir Selesai" class="bg-white dark:bg-slate-800 text-slate-900 dark:text-white" {{ $proyek->status == 'Hampir Selesai' ? 'selected' : '' }}>🔥 Hampir Selesai</option>
                                                        <option value="Selesai" class="bg-white dark:bg-slate-800 text-slate-900 dark:text-white" {{ $proyek->status == 'Selesai' ? 'selected' : '' }}>✅ Selesai</option>
                                                    </select>
                                                </form>
                                            </li>
                                        @endforeach
                                    </ul>
                                @else
                                    <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-lg bg-slate-50/50 dark:bg-slate-800/50 border border-slate-200/50 dark:border-slate-700/50 text-sm text-slate-400 dark:text-slate-500 italic mb-3">
                                        <span>Belum ada proyek ditugaskan</span>
                                    </div>
                                @endif

                                <div class="mt-2">
                                    <button onclick="openModalProyek('{{ $p->id }}', '{{ addslashes($p->nama) }}')" class="inline-flex items-center gap-1 text-xs font-semibold text-indigo-600 dark:text-indigo-400 hover:text-indigo-800 dark:hover:text-indigo-300 bg-indigo-50/50 dark:bg-indigo-900/30 hover:bg-indigo-100/50 dark:hover:bg-indigo-900/50 backdrop-blur-sm border border-indigo-100/50 dark:border-indigo-800/50 px-3 py-1.5 rounded-md transition-colors duration-200 cursor-pointer">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                        </svg>
                                        Tambah Proyek
                                    </button>
                                </div>
                            </td>
                            
                            <td class="px-6 py-5 align-top text-center">
                                <div class="flex justify-center gap-2">
                                    <button onclick="openModalEditKaryawan('{{ $p->id }}', '{{ addslashes($p->nama) }}', '{{ addslashes($p->posisi) }}')" title="Edit Karyawan" class="text-amber-500 hover:text-white bg-amber-50/80 dark:bg-amber-900/20 hover:bg-amber-500 dark:hover:bg-amber-500/80 backdrop-blur-sm border border-amber-200/50 dark:border-amber-700/50 p-2 rounded-lg transition-colors duration-200 cursor-pointer">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                        </svg>
                                    </button>

                                    <form action="{{ route('karyawan.delete', ['id' => $p->id ])}}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" title="Hapus Karyawan" class="text-rose-500 hover:text-white bg-rose-50/80 dark:bg-rose-900/20 hover:bg-rose-500 dark:hover:bg-rose-500/80 backdrop-blur-sm border border-rose-200/50 dark:border-rose-700/50 p-2 rounded-lg transition-colors duration-200 cursor-pointer" onclick="return confirm('Apakah Anda yakin ingin menghapus karyawan ini beserta semua proyeknya?')">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="px-6 py-10 text-center text-slate-500 dark:text-slate-400">
                                Data karyawan tidak ditemukan atau masih kosong.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
        <div class="bg-slate-50/50 dark:bg-slate-800/50 px-6 py-4 border-t border-slate-200/50 dark:border-slate-700/50 backdrop-blur-md">
            {{ $karyawan->links() }}
        </div>
    </div>

    @include('karyawan.modals.tambah_karyawan')
    @include('karyawan.modals.edit_karyawan')
    @include('karyawan.modals.tambah_proyek')
    <script>
        function openModalKaryawan() { document.getElementById('modal-karyawan').classList.remove('hidden'); }
        function openModalEditKaryawan(id, nama, posisi) {
            document.getElementById('form-edit-karyawan').action = `/karyawan/${id}`;
            document.getElementById('edit_nama').value = nama;
            document.getElementById('edit_posisi').value = posisi;
            document.getElementById('modal-edit-karyawan').classList.remove('hidden');
        }
        function openModalProyek(karyawanId, namaKaryawan) {
            document.getElementById('nama-karyawan-modal').innerText = namaKaryawan;
            document.getElementById('form-tambah-proyek').action = `/karyawan/${karyawanId}/proyek`;
            document.getElementById('modal-proyek').classList.remove('hidden');
        }
        function closeModal(modalId) { document.getElementById(modalId).classList.add('hidden'); }
    </script>
@endsection