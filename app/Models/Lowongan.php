<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lowongan extends Model
{
    use HasFactory;

    protected $table = 'lowongan';

    protected $fillable = [
        'uuid',
        'posisi_id',
        'departemen_id',
        'slug',
        'lokasi',
        'tgl_buka',
        'tgl_tutup',
        'kualifikasi',
        'deskripsi',
        'kebutuhan_pelamar',
        'brosur',
        'status_low',
    ];

    public static function boot()
    {
        parent::boot();
        static::creating(function ($lowongan) {
            $namaPosisi = Posisi::find($lowongan->posisi_id)->nama_posisi ?? 'lowongan';

            $lowongan->slug = Str::slug($namaPosisi);
            $lowongan->uuid = Str::uuid();
        });
    }

    public function posisi()
    {
        return $this->belongsTo(Posisi::class, 'posisi_id');
    }

    public function departemen()
    {
        return $this->belongsTo(Departemen::class, 'departemen_id');
    }
}
