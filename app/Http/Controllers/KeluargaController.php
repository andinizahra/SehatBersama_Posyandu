<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\keluarga;
use Illuminate\View\View;


class KeluargaController extends Controller
{
    public function index():View
    {
        $data = [
            'keluarga' => User::all()
        ];

        return view('dashboard_keluarga.index', $data);
    }
}
 