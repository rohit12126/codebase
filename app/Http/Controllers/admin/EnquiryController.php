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

    public function index()
    {
        return view('frontend.contact');
    }

    
    /**
     * Display list of enquries
     * 
     * @param $req
     * @return \Illuminate\Http\Response
     */
    public function list(Request $req)
    {
        $enquieies=$this->enquiryManager->getEnquiryListPaginated($req);
        return view('dashboard.enquiries',compact('enquieies'));
    }


    /**
     * Change status of Enquries.
     * 
     * @param $id
     * @return \Illuminate\Http\Response
     */
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

        /**
     * Stores a Enqury 
     * 
     * @param $request
     * @return \Illuminate\Http\Response
     */
    public function submit(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:8|max:15',
            'reason' => 'required',
            'message' => 'required'
         ]);
         if($this->enquiryManager->store($request)){
         return back()->with('success', 'We have received your message and would like to thank you for writing to us.');
         }

    }


}
