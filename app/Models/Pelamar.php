<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticable;

class Pelamar extends Authenticable

{
    use HasFactory;

    protected $table = 'pelamar';

    protected $fillable = [
        'user_id',
        'lowongan_id',
        // 'departemen_id',
        // 'posisi_id',
        'nama_lengkap',
        'nama_panggilan',
        'jenis_kelamin',
        'agama',
        'tempat_lahir',
        'tgl_lahir',
        'status_kawin',
        'alamat',
        'no_telp',
        'email',
        'password',
        'profile',
        'cv',
    ];

    protected $casts = [
        'tgl_lahir' => 'date:d-m-Y'
    ];

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
