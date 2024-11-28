<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Presensi extends Model
{
    protected $fillable = [
        'name',
        'nis',
        'gender',
        'kelas_id',
        'tanggal',
        'status_kehadiran'
    ];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
}
