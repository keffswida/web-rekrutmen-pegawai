<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAdm extends Model
{
    use HasFactory;

    protected $table = 'useradm';

    protected $fillable = [
        'nama_lengkap',
        'email',
        'password',
        'hak_akses',
        'status',
    ];
}
