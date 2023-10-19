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
        if (Auth::attempt($data)) {
            $request->session()->regenerate();
            return redirect()->to('/dashboard');
        }
        
        return view('dashboard_keluarga.index', $data);
    }
}
 