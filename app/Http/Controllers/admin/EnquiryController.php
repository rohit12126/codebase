<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Classes\EnquiryManager;
use App\Classes\HelperManager as Common;

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
        $enquieies=$this->enquiryManager->getEnquiryListPaginated();
        return view('dashboard.enquiries',compact('enquieies'));
    }
    public function contected($id)
    {
        $response = $this->enquiryManager->contected($id);
        if($response == true){
            Common::setMessage(__('enqury_contect_success'));
        }else{
            Common::setMessage(__('enqury_contect_failed'), 'error');
        }
        return back();
    }


}
