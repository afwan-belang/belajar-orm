<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Manajemen SDM') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <script>
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>
</head>
<body class="min-h-screen bg-slate-50 dark:bg-slate-900 text-slate-800 dark:text-slate-100 antialiased transition-colors duration-500 relative overflow-x-hidden selection:bg-indigo-500 selection:text-white">
    
    <div class="fixed top-[-10%] left-[-10%] w-96 h-96 bg-indigo-400/40 dark:bg-indigo-600/20 rounded-full blur-[100px] pointer-events-none z-0"></div>
    <div class="fixed bottom-[-10%] right-[-5%] w-[30rem] h-[30rem] bg-emerald-400/30 dark:bg-emerald-600/20 rounded-full blur-[100px] pointer-events-none z-0"></div>
    <div class="fixed top-[40%] right-[20%] w-72 h-72 bg-purple-400/30 dark:bg-purple-600/20 rounded-full blur-[100px] pointer-events-none z-0"></div>

    <div class="container mx-auto px-4 py-6 relative z-10">
        <div class="flex justify-end mb-4">
            <button id="theme-toggle" type="button" class="text-slate-500 dark:text-slate-300 hover:bg-slate-200 dark:hover:bg-slate-700/50 rounded-xl text-sm p-2.5 backdrop-blur-md bg-white/40 dark:bg-slate-800/40 border border-white/60 dark:border-slate-700/50 shadow-sm transition-all duration-300 cursor-pointer">
                <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
                <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
            </button>
        </div>

        @yield('content')
    </div>

    <script>
        const htmlEl = document.documentElement;
        const themeBtn = document.getElementById('theme-toggle');
        const darkIcon = document.getElementById('theme-toggle-dark-icon');
        const lightIcon = document.getElementById('theme-toggle-light-icon');

        // Setup Ikon Awal
        if (htmlEl.classList.contains('dark')) {
            lightIcon.classList.remove('hidden');
        } else {
            darkIcon.classList.remove('hidden');
        }

        // Fungsi Eksekusi Klik
        themeBtn.addEventListener('click', function() {
            // Paksa HTML mengganti class
            htmlEl.classList.toggle('dark');
            
            // Cek status saat ini
            const isDark = htmlEl.classList.contains('dark');
            
            // Simpan status baru ke penyimpanan browser
            localStorage.setItem('color-theme', isDark ? 'dark' : 'light');
            
            // Ganti Ikon
            if (isDark) {
                darkIcon.classList.add('hidden');
                lightIcon.classList.remove('hidden');
            } else {
                lightIcon.classList.add('hidden');
                darkIcon.classList.remove('hidden');
            }
        });
    </script>
</body>
</html>