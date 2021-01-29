<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Classes\PricingMatrixManager;
use App\Classes\HelperManager as Common;

class PricingMatrixController extends Controller
{
    protected $pricingMatrixManager;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        PricingMatrixManager $pricingMatrixManager
    )
    {
      $this->pricingMatrixManager = $pricingMatrixManager;
    }

    /**
     * Get Pricinfg Matrix and pass to view
     *
     * @return bool
     */
    public function index(Request $req)
    {
        
        $matrix_list = $this->pricingMatrixManager->pricingMatrixList($req->title);
        return view('dashboard.pricing_matrix_list',compact('matrix_list'));
    }

    public function add(Request $req)
    {
        return view('dashboard.pricing_matrix');
    }

    public function save(Request $req)
    {
        foreach ($req->except('_token') as $data => $value) {
            $valids[$data] = "required";
            $matrix[$data] = $value;
        }
        
        $req->validate($valids);
        
        $response = $this->pricingMatrixManager->add($matrix);
        if($response == true){
            Common::setMessage(__('matrix_add_success'));
        }else{
            Common::setMessage(__('matrix_add_failed'), 'error');
        }
        return redirect()->route('admin.matrix.list');
    }

    public function edit($id)
    {
        $pricingMatrix = $this->pricingMatrixManager->getPricingMatrixById($id);
        return view('dashboard.pricing_matrix',compact('pricingMatrix'));
    }

    public function update(Request $req , $id)
    {
        
        foreach ($req->except('_token') as $data => $value) {
            $valids[$data] = "required";
            $matrix[$data] = $value;
        }
        
        $req->validate($valids);
        
        $response = $this->pricingMatrixManager->update($matrix , $id);
        if($response == true){
            Common::setMessage(__('matrix_update_success'));
        }else{
            Common::setMessage(__('matrix_update_failed'), 'error');
        }
        return redirect()->route('admin.matrix.list');
    }

    public function delete($id)
    {
        $response = $this->pricingMatrixManager->delete($id);
        if($response == true){
            Common::setMessage(__('matrix_delete_success'));
            }else{
                Common::setMessage(__('matrix_delete_failed'), 'error');
            }
        return back();
    }
}
