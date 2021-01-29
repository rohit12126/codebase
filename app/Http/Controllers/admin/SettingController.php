<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Classes\SettingManager;
use App\Classes\HelperManager as Common;

class SettingController extends Controller
{
    protected $settingManager;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        SettingManager $settingManager
    )
    {
        $this->settingManager = $settingManager;
    }

    public function index()
    {
      $setting = $this->settingManager->getSettings();
      return view('dashboard.setting', compact('setting'));
    }

    public function update(Request $req)
    {
      if(empty($req->id)){
        $response = $this->settingManager->saveSettings($req);
      }
      else{
        $response = $this->settingManager->updateSettings($req);
      }
      if ($response == true) {
        Common::setMessage(__('settings_save_success'));
      } else {
          Common::setMessage(__('settings_save_failed'), 'error');
      }
    return back();
    }

}
