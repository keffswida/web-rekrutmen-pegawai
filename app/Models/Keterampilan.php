<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keterampilan extends Model
{
    use HasFactory;

    protected $table = 'keterampilan';

    protected $fillable = [
        'id_pelamar',
        'bidang_keterampilan',
        'keterampilan_terkait',
    ];

    public function pelamar()
    {
        return $this->belongsTo(Pelamar::class, 'id_pelamar');
    }
}
