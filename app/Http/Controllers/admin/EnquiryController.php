<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Classes\EnquiryManager;

class EnquiryController extends Controller
{
    protected $enquiryManager;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        EnquiryManager $enquiryManager
    )
    {
        $this->enquiryManager = $enquiryManager;
    }

    public function list()
    {
        $response=$this->enquiryManager->getEnquiryListPaginated();
        return view('dashboard.enquiries');
    }


}
