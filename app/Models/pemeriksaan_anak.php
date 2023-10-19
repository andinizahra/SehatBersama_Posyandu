<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pemeriksaan_anak extends Model
{
    use HasFactory;

    protected $table = 'pemeriksaan_anak';
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    protected $fillable = ['pemeriksaan_anak'];

    public $timestamps = false;
}
