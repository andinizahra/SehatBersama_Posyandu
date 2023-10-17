<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KeluargaController extends Controller
{
    public{
        $data = [
            'keluarga' => Keluarga::all()
        ];

        return view('dashboard.keluarga.index', $data)
    }
}
