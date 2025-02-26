<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lowongan extends Model
{
    use HasFactory;

    protected $table = 'lowongan';

    protected $fillable = [
        'posisi_id',
        'departemen_id',
        'lokasi',
        'tgl_buka',
        'tgl_tutup',
        'kualifikasi',
        'deskripsi',
        'kebutuhan_pelamar',
        'brosur',
        'status_low',
    ];

    public function posisi()
    {
        return $this->belongsTo(Posisi::class, 'posisi_id');
    }

    public function departemen()
    {
        return $this->belongsTo(Departemen::class, 'departemen_id');
    }
}
