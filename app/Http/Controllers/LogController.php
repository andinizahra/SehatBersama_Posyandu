<?php

namespace App\Http\Controllers;

use App\Models\Log;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LogController extends Controller
{
    public function index(): View
    {
        $data = [
            'logs' => Log::query()->orderBy('created_at', 'DESC')->get()
        ];

        return view('dashboard_admin.log.index', $data);
    }
}