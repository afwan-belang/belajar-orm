<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Karyawan extends Model
{
    protected $fillable = ['nama', 'posisi'];

    // Relasi: 1 Karyawan memiliki banyak Proyek
    public function proyeks(): HasMany
    {
        return $this->hasMany(Proyek::class);
    }
}