<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('proyeks', function (Blueprint $table) {
           $table->id();
            // Foreign key yang mengarah ke tabel karyawans
            $table->foreignId('karyawan_id')->constrained('karyawans')->cascadeOnDelete();
            
            $table->string('nama_proyek');
            $table->enum('status', ['Berjalan', 'Hampir Selesai', 'Selesai'])->default('Berjalan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proyeks');
    }
};
