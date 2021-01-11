<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Classes\ZoneManager;
use App\Classes\HelperManager as Common;

class ZoneController extends Controller
{
    protected $zoneManager;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        ZoneManager $zoneManager
    )
    {
        $this->zoneManager = $zoneManager;
    }
    //
    public function index()
    {
        $state_list=$this->zoneManager->stateslist();
        return view('dashboard.zone',compact('state_list'));
    }

    public function addZone(Request $req)
    {
        $response=$this->zoneManager->addZone($req);
        if($response == true){
            Common::setMessage(__('zone_add_success'));
        }else{
            Common::setMessage(__('zone_add_failed'), 'error');
        }
        return back();
    }

    public function zoneList(Request $req)
    {
        $zone_list=$this->zoneManager->getZone($req);
        return view('dashboard.zone_list',compact('zone_list'));
    }

    public function editZone(Request $req, $id)
    {
        $zone = $this->zoneManager->getZoneById($id);
        $state_list=$this->zoneManager->stateslist();
        return view('dashboard.zone',compact('zone','state_list'));
    }

    public function editSubmitZone(Request $req, $id)
    {
        $response = $this->zoneManager->updateZone($req, $id);
        if($response == true){
            Common::setMessage(__('zone_add_success'));
        }else{
            Common::setMessage(__('zone_add_failed'), 'error');
        }
        
        return back();
    }

    public function deleteZone(Request $req, $id)
    {
        $response=$this->zoneManager->deleteZone($id);

        if($response == true){
            Common::setMessage(__('zone_delete_success'));
        }else{
            Common::setMessage(__('zone_delete_failed'), 'error');
        }
        return back();
    }
}
