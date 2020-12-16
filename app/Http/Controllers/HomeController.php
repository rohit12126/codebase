<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Classes\FaqManager;

class HomeController extends Controller
{
    public function __construct(
        FaqManager $faqManager
    )
    {
        $this->faqManager = $faqManager;
    }

    public function home()
    {
        return view('frontend.home');
    }

    public function faq()
    {
        $faq_list = $this->faqManager->getfaqList(5);
        return view('frontend.faq',compact('faq_list'));
    }

    public function aboutUs()
    {
        return view('frontend.about-us');
    }

    public function installation()
    {
        return view('frontend.installation');
    }

    public function resourcePage()
    {
        return view('frontend.resource-page');
    }

    public function projects()
    {
        return view('frontend.projects');
    }
}
