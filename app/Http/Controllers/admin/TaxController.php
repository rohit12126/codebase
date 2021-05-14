<?php

namespace App\Http\Controllers\admin;

// use Illuminate\Http\Requests\Request;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Classes\TaxManager;
use App\Classes\HelperManager as Common;

class TaxController extends Controller
{
    protected $taxManager;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        TaxManager $taxManager
    )
    {
        $this->taxManager = $taxManager;
    }
    /**
     * Create new tax form.
     *  
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $state_list=$this->taxManager->stateslist();
        // dd($state_list);
        return view('dashboard.tax',compact('state_list'));
    }

    /**
     * Stores a new tax
     *  @param $req
     * @return \Illuminate\Http\Response
     */
    public function addTax(Request $req)
    {
        $this->validate(
            $req, 
            [
                'title' => 'required',
                'product_price'=> 'required|numeric|min:0|not_in:0',
                'states'=>'required',
                'hardware.*.min_weight' => 'required|integer',
                'hardware.*.max_weight' => 'required|integer',
                'hardware.*.price'    => 'required|not_in:0',
            ]
        ); 
        $response=$this->taxManager->addTax($req);
        if($response == true){
            Common::setMessage(__('tax_add_success'));
        }else{
            Common::setMessage(__('tax_add_failed'), 'error');
        }
        return back();
    }

        /**
     *Display list of Tax
     *  @param $req
     * @return \Illuminate\Http\Response
     */
    public function taxList(Request $req)
    {
        $tax_list=$this->taxManager->getTax($req);
        // dd($tax_list);
        return view('dashboard.tax_list',compact('tax_list'));
    }

        /**
     * Edit Tax Form
     *  @param $req
     * @return \Illuminate\Http\Response
     */
    public function editTax(Request $req, $id)
    {
        $tax = $this->taxManager->getTaxById($id);
        $state_list=$this->taxManager->stateslist();
        return view('dashboard.tax',compact('tax','state_list'));
    }

        /**
     * Update a Tax
     *  @param $req
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function editSubmitTax(Request $req, $id)
    {
        // dd($req);
        $this->validate(
            $req, 
            [
                'title' => 'required',
                'product_price'=> 'required|numeric|min:0|not_in:0',
                'hardware.*.min_weight' => 'required|integer',
                'hardware.*.max_weight' => 'integer',
                'hardware.*.price'    => 'required|not_in:0',
                'states'=>'required'
            ]
        );
        $response = $this->taxManager->updateTax($req, $id);
        if($response == true){
            Common::setMessage(__('tax_add_success'));
        }else{
            Common::setMessage(__('tax_add_failed'), 'error');
        }
        
        return back();
    }

        /**
     * Destroy a Tax
     *  @param $req
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function deleteTax(Request $req, $id)
    {
        $response=$this->taxManager->deleteTax($id);

        if($response == true){
            Common::setMessage(__('tax_delete_success'));
        }else{
            Common::setMessage(__('tax_delete_failed'), 'error');
        }
        return back();
    }
}
