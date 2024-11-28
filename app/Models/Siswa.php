<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $fillable = ['name', 'nis', 'gender', 'kelas_id'];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }

    public function presensis()
    {
        return $this->hasMany(Presensi::class);
    }
}

// app/Models/Presensi.php
class Presensi extends Model
{
    protected $fillable = ['siswa_id', 'tanggal', 'status_kehadiran'];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
}