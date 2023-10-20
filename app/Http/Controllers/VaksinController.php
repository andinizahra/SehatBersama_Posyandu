<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class VaksinController extends Controller
{
    public function index(): View 
    {
        $data = [
            'user' => User::all()
        ];

        return view('/dashboard/dashboard/catatan_vaksin', $data);
    }
}
