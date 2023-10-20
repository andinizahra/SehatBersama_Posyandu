<?php

namespace App\Http\Controllers;

use App\Models\auth;
use App\Models\DataAnak;
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

        if(auth()->user()->role == 'admin'){
            return view('dashboard_admin.index');
        }
        if(auth()->user()->role == 'kader'){
            $data_anak = [
                'data_anak' =>DataAnak::all()
            ];
            return view('dashboard_kader.index',$data_anak);
        }
        if(auth()->user()->role == 'keluarga'){
            return view('dashboard_keluarga.index');
        }

        return null;

    }

    

}
