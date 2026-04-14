<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Proyek extends Model
{
    protected $fillable = ['karyawan_id', 'nama_proyek', 'status'];

    // Relasi balik: Proyek ini milik 1 Karyawan
    public function karyawan(): BelongsTo
    {
        return $this->belongsTo(Karyawan::class);
    }
}