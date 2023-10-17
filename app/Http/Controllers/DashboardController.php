<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('dashboard_admin.index');
    }

    public function indexKeluarga()
    {
        return view('dashboard_keluarga.index');
    }
}
