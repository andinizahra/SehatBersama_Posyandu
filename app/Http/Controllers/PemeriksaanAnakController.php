<?php

namespace App\Http\Controllers;

use Database\Factories\PemeriksaanAnakFactory;
use Illuminate\Http\Request;

class PemeriksaanAnakController extends Controller
{
    public function index()
    {
        $data = [
            'pemeriksaan_anak' => PemeriksaanAnak::all()
        ];

        return view('pemeriksaan_anak.index', $data);
    }
}
