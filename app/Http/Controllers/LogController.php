<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class LogController extends Controller
{
    public function index(): View
    {
        $data = [
            'logs' => Log::query()->orderBy('created_at', 'DESC')->get()
        ];

        return view('dashboard.log.index', $data);
    }
}
