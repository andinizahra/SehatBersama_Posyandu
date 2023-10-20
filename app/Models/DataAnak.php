<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataAnak extends Model
{
    use HasFactory;
    protected $table = 'anak'; 

    protected $fillable = [
        'nama',
        'NIK',
        'nama_kepala_keluarga',
        'jenis_kelamin',
        'tanggal_lahir',
        'nama_orang_tua',
        'nomor_telepon',
        'alamat',
        'tinggi_badan',
        'berat_badan',
        'gol_darah'
    ];
}
