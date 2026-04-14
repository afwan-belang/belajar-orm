<div id="modal-proyek" class="hidden fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="fixed inset-0 bg-slate-900/40 dark:bg-slate-950/70 backdrop-blur-md transition-opacity" onclick="closeModal('modal-proyek')"></div>
    
    <div class="flex min-h-full items-center justify-center p-4 text-center sm:p-0 pointer-events-none">
        <div class="relative transform overflow-hidden rounded-2xl bg-white/80 dark:bg-slate-800/80 backdrop-blur-2xl text-left shadow-2xl transition-all sm:my-8 sm:w-full sm:max-w-lg pointer-events-auto border border-white/60 dark:border-slate-600/50">
            <div class="px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                <h3 class="text-xl font-bold leading-6 text-slate-900 dark:text-white mb-2">Tambah Proyek Baru</h3>
                <p class="text-sm text-slate-500 dark:text-slate-400 mb-4">Menugaskan untuk: <span id="nama-karyawan-modal" class="font-bold text-indigo-600 dark:text-indigo-400"></span></p>
                
                <form id="form-tambah-proyek" method="POST">
                    @csrf
                    <div class="mb-6">
                        <label for="nama_proyek" class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Nama Proyek</label>
                        <input type="text" name="nama_proyek" id="nama_proyek" placeholder="Contoh: Aplikasi Monitoring Lingkungan" class="w-full px-4 py-2 border border-white/60 dark:border-slate-600/50 rounded-lg bg-white/50 dark:bg-slate-900/50 backdrop-blur-md text-slate-900 dark:text-white focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all" required>
                    </div>
                    <div class="flex justify-end gap-3">
                        <button type="button" onclick="closeModal('modal-proyek')" class="mt-3 inline-flex w-full justify-center rounded-lg bg-white/50 dark:bg-slate-700/50 backdrop-blur-md px-3 py-2 text-sm font-semibold text-slate-900 dark:text-slate-200 shadow-sm ring-1 ring-inset ring-slate-300/50 dark:ring-slate-600/50 hover:bg-slate-50 dark:hover:bg-slate-600 sm:mt-0 sm:w-auto border border-white/50 dark:border-transparent cursor-pointer transition-colors">Batal</button>
                        <button type="submit" class="inline-flex w-full justify-center rounded-lg bg-indigo-600/90 dark:bg-indigo-500/90 backdrop-blur-md px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 dark:hover:bg-indigo-400 border border-indigo-400/50 dark:border-indigo-400/30 sm:w-auto cursor-pointer transition-colors">Simpan Proyek</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>