<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Classes\HomeManager;
use App\Classes\HelperManager as Common;

class DashboardController extends Controller
{
    public function index()
    {
        $data = HomeManager::getDashboardData();
        return view('dashboard.homepage', compact('data'));
    }
}
