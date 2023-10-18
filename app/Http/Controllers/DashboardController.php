<?php

namespace App\Http\Controllers;

use App\Models\auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        if(auth()->user()->role == 'admin'){
            return view('dashboard_admin.index');
        }
        if(auth()->user()->role == 'kader'){
            return view('dashboard_kader.index');
        }
        if(auth()->user()->role == 'keluarga'){
            return view('dashboard_keluarga.index');
        }

    }
}
