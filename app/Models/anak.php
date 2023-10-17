<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class anak extends Model
{
    use HasFactory;
    protected $table = 'anak'; 

    protected $fillable = [
        'no_kk',
        'nik_anak',
        'nama_anak',
        'nama_orang_tua',
        'jenis_kelamin',
        'foto_identitas',
        'nomor_telepon_orang_tua',
        'tanggal_lahir',
        'tempat_lahir'
    ];
}
