<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//use App\Classes\BlogManager;

class HomeController extends Controller
{
    public function home()
    {
        return view('frontend.home');
    }

    public function faq()
    {
        return view('frontend.faq');
    }

    public function aboutUs()
    {
        return view('frontend.about-us');
    }
}
