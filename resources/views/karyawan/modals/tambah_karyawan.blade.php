<div id="modal-karyawan" class="hidden fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="fixed inset-0 bg-slate-900/40 dark:bg-slate-950/70 backdrop-blur-md transition-opacity" onclick="closeModal('modal-karyawan')"></div>
    <div class="flex min-h-full items-center justify-center p-4 text-center sm:p-0 pointer-events-none">
        <div class="relative transform overflow-hidden rounded-2xl bg-white/80 dark:bg-slate-800/80 backdrop-blur-2xl text-left shadow-2xl transition-all sm:my-8 sm:w-full sm:max-w-lg pointer-events-auto border border-white/60 dark:border-slate-600/50">
            <div class="px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                <h3 class="text-xl font-bold leading-6 text-slate-900 dark:text-white mb-4">Tambah Karyawan Baru</h3>
                <form action="{{ route('karyawan.create') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="nama" class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Nama</label>
                        <input type="text" name="nama" id="nama" placeholder="Masukkan nama karyawan" class="w-full px-4 py-2 border border-white/60 dark:border-slate-600/50 rounded-lg bg-white/50 dark:bg-slate-900/50 backdrop-blur-md text-slate-900 dark:text-white focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" required>
                    </div>
                    <div class="mb-6">
                        <label for="posisi" class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Posisi</label>
                        <input type="text" name="posisi" id="posisi" placeholder="Masukkan posisi karyawan" class="w-full px-4 py-2 border border-white/60 dark:border-slate-600/50 rounded-lg bg-white/50 dark:bg-slate-900/50 backdrop-blur-md text-slate-900 dark:text-white focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" required>
                    </div>
                    <div class="flex justify-end gap-3">
                        <button type="button" onclick="closeModal('modal-karyawan')" class="mt-3 inline-flex w-full justify-center rounded-lg bg-white/50 dark:bg-slate-700/50 backdrop-blur-md px-3 py-2 text-sm font-semibold text-slate-900 dark:text-slate-200 shadow-sm ring-1 ring-inset ring-slate-300/50 dark:ring-slate-600/50 hover:bg-slate-50 dark:hover:bg-slate-600 sm:mt-0 sm:w-auto border border-white/50 dark:border-transparent cursor-pointer">Batal</button>
                        <button type="submit" class="inline-flex w-full justify-center rounded-lg bg-indigo-600/90 dark:bg-indigo-500/90 backdrop-blur-md px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 dark:hover:bg-indigo-400 border border-indigo-400/50 dark:border-indigo-400/30 sm:w-auto cursor-pointer">Simpan Karyawan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>