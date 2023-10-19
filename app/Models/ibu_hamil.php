<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class ibu_hamil extends Model
{
    use HasFactory;
    protected $table = 'ibu_hamil'; 

    protected $fillable = [
        'nik_ibu_hamil',
        'nama_ibu_hamil',
        'tanggal_lahir',
        'nomor_telepon_orang_tua',
        'foto'
    ];

    protected $primaryKey = 'nik_ibu_hamil'; 

    public $incrementing = false;  

    public $timestamps = false; 

}
