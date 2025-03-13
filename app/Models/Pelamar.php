<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\Lamaran;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pelamar extends Authenticable

{
    use HasFactory;

    protected $table = 'pelamar';

    protected $fillable = [
        'user_id',
        'lowongan_id',
        // 'departemen_id',
        // 'posisi_id',
        // 'nama_lengkap',
        // 'nama_panggilan',
        'jenis_kelamin',
        'agama',
        'tempat_lahir',
        'tgl_lahir',
        'status_kawin',
        'alamat',
        'no_telp',
        // 'email',
        // 'password',
        'profile',
        'cv',
        'ktp',
        'status_pelamaran',
        'catatan',
        'tgl_melamar',
    ];

    protected $casts = [
        'tgl_lahir' => 'date:d-m-Y'
    ];

    public $attributes = [
        'status_pelamaran' => 0,
        'tgl_melamar' => null,
    ];
    public static function boot()
    {
        parent::boot();
        static::creating(function ($pelamar) {
            if (empty($pelamar->tgl_pelamar)) {
                $pelamar->tgl_melamar = Carbon::now()->format('Y-m-d');
            }
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function lowongan()
    {
        return $this->belongsTo(Lowongan::class, 'lowongan_id');
    }

    public function departemen()
    {
        return $this->belongsTo(Departemen::class, 'departemen_id');
    }

    public function posisi()
    {
        return $this->belongsTo(Posisi::class, 'posisi_id');
    }

    public function pendidikan()
    {
        return $this->hasMany(Pendidikan::class, 'id_pelamar');
    }
}
