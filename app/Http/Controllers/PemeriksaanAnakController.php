<?php

namespace App\Http\Controllers;

use App\Models\pemeriksaan_anak;
// use App\Models\PemeriksaanAnak;
use Database\Factories\PemeriksaanAnakFactory;
use Illuminate\Http\Request;

class PemeriksaanAnakController extends Controller
{
    public function index()
    {
        $data = [
            'pemeriksaan_anak' => pemeriksaan_anak::all()
        ];
        // dd($data);

        return view('dashboard_keluarga.pemeriksaan_anak.index', $data);
    }
}
