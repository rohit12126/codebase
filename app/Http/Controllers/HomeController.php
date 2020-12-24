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

    /**
     * Home Page
     *
     * @return \Illuminate\View
     */
    public function home()
    {
        return view('frontend.home');
    }


    /**
     * FAQ Page
     *
     * @return \Illuminate\View
     */
    public function faq()
    {
        $faq_list = $this->faqManager->getfaqList(5);
        return view('frontend.faq',compact('faq_list'));
    }

    /**
     * About us Page
     *
     * @return \Illuminate\View
     */
    public function aboutUs()
    {
        return view('frontend.about-us');
    }

    /**
     * Installation Page
     *
     * @return \Illuminate\View
     */
    public function installation()
    {
        return view('frontend.installation');
    }

    /**
     * Resource Page
     *
     * @return \Illuminate\View
     */
    public function resourcePage()
    {
        return view('frontend.resource-page');
    }

    /**
     * Projects Page
     *
     * @return \Illuminate\View
     */
    public function projects()
    {
        return view('frontend.projects');
    }

    /**
     * Terms and condition Page
     *
     * @return \Illuminate\View
     */
    public function termsAndCondition()
    {
        return view('frontend.terms-and-conditions');
    }

    /**
     * 404 Page
     *
     * @return \Illuminate\View
     */
    public function notFound()
    {
        return view('frontend.not-found');
    }

    /**
     * Privacy policy Page
     *
     * @return \Illuminate\View
     */
    public function privacyPolicy()
    {
        return view('frontend.privacy-policy');
    }

    /**
     * Returns Page
     *
     * @return \Illuminate\View
     */
    public function returns()
    {
        return view('frontend.returns');
    }
}
