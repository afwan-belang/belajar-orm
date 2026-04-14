<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# 🚀 NexHR - Modern Employee & Project Management System

Sebuah sistem informasi manajemen Sumber Daya Manusia (SDM) dan pemantauan Proyek berbasis web. Dibangun dengan fokus pada **Performa**, **Efisiensi**, dan **User Experience (UI/UX)** yang premium. 

Proyek ini mendemonstrasikan implementasi CRUD tingkat lanjut yang interaktif, meniru nuansa *Single Page Application* (SPA) menggunakan arsitektur Laravel yang solid.

---

## ✨ Fitur Unggulan

Aplikasi ini tidak sekadar menampilkan tabel data, melainkan membawa pengalaman interaktif bagi penggunanya:

* 🌗 **Seamless Dark/Light Mode:** Terintegrasi penuh dengan Tailwind CSS v4, menghadirkan transisi tema gelap dan terang yang sangat halus.
* 🪞 **Premium Glassmorphism UI:** Desain antarmuka modern dengan efek *frosted glass* (kaca buram), memberikan *vibe* aplikasi *enterprise* kelas atas.
* ⚡ **SPA-Like Experience (Modal UI):** Seluruh operasi tambah dan edit data (Karyawan & Proyek) dilakukan melalui *Popup Modal* dinamis tanpa perlu memuat ulang halaman (*page reload*).
* 🔄 **Interactive Inline Update:** Ubah status proyek (Berjalan, Hampir Selesai, Selesai) secara langsung (*on-the-fly*) melalui *dropdown* interaktif di halaman utama.
* 🔍 **Smart Filtering & Pagination:** Fitur pencarian data karyawan secara *real-time* berdasarkan nama atau posisi, lengkap dengan paginasi bergaya Tailwind.
* 🛡️ **Optimized Database Queries:** Menerapkan *Eager Loading* Eloquent untuk mengatasi masalah *N+1 Query*, memastikan aplikasi tetap secepat kilat meskipun data berjumlah ribuan.

---

## 🛠️ Tech Stack

Aplikasi ini dibangun menggunakan standar teknologi web modern terbaru:

* **Framework Backend:** [Laravel 11](https://laravel.com/)
* **Bahasa Pemrograman:** PHP 8+
* **Framework Frontend:** [Tailwind CSS v4](https://tailwindcss.com/)
* **Asset Bundler:** [Vite](https://vitejs.dev/)
* **Database:** MySQL / SQLite

---

## 📸 Tampilan Antarmuka (Screenshots)

*(Ganti teks di bawah ini dengan link gambar screenshot aplikasi Anda nantinya)*

- **Light Mode View:** `[Masukkan URL Gambar Light Mode di sini]`
- **Dark Mode View:** `[Masukkan URL Gambar Dark Mode di sini]`
- **Interactive Modal View:** `[Masukkan URL Gambar saat Modal Tambah/Edit terbuka]`

---

## 🚀 Cara Instalasi & Menjalankan Project

Jika Anda ingin menjalankan proyek ini di *local environment* Anda, ikuti langkah-langkah standar berikut:

1. **Clone repository ini:**
   ```bash
   git clone [https://github.com/username-anda/nama-repo-anda.git](https://github.com/username-anda/nama-repo-anda.git)
   cd nama-repo-anda

<h1>Tampilan Dashboard Light Mode</h1>

![DashboardLightMode](Dashboard-LightMode.png)
<h1>Tampilan Dashboard Night Mode</h1>

![DashboardLightMode](Dashboard-NightMode.png)
<h1>Tambah Data Karyawan</h1>

![DashboardLightMode](TambahKaryawan.png)
<h1>Tambah Proyek Yang dikerjakan Karyawan</h1>

![DashboardLightMode](TambahProyekKaryawan.png)