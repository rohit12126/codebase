<?php

namespace App\Classes;

use App\Models\Setting as SettingModel;

class SettingManager
{
  public function getSettings()
  {
    return SettingModel::latest()->first();
  }

  public function saveSettings($req)
  {
      foreach ($req->except('_token') as $data => $value) {
      $setting[$data] = $value;
    }
    if (SettingModel::create($setting))
    return true;
    return FALSE;
  }

  public function updateSettings($req)
  {
      foreach ($req->except('_token' , 'id') as $data => $value) {
      $setting[$data] = $value;
    }
    if (SettingModel::findOrFail($req->id)->update($setting)) {
        return true;
    } else {
        return false;
    }
  }
}
