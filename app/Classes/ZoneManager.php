<?php

namespace App\Classes;

use App\Models\Zone as ZoneModel;
use App\Models\State as StateModel;
use Illuminate\Support\Facades\DB;


class ZoneManager
{
  public function stateslist()
  {
    return DB::table('states')->get();
  }

  // public function statesWithZone()
  // {
  //   return ZoneModel::with('state')->get();
  // }

  public function addZone($req)
  {
    $data = [
      'title' => $req->title,
      'product_price' => $req->product_price,
      'hardware_price' => $req->hardware_price,
      ];
      if ($zone = ZoneModel::create($data)) 
      {
        foreach($req->states as $state)
        {
          DB::table('states')->where('id', $state)->update(['zone_id' => $zone->id]);
        }
        return true;
      }
      else 
      {
          return false;
      }
  }

  public function getZone($req)
  {
    $zone_list = ZoneModel::with('state')->paginate(8);
    return $zone_list;
  }

  public function getZoneById($id)
  {
    $zone = ZoneModel::with('state')->find($id);
    return $zone;
  }

  public function updateZone($req, $id)
  {
    $zone = null;
    if ($exist = $this->getzoneById($req->id)) {
        $zone = $exist;
    } else {
        return false;
    }
    $data = [
      'title' => $req->title,
      'product_price' => $req->product_price,
      'hardware_price' => $req->hardware_price,
      ];
    if($zone->fill($data)->save())
    {
      DB::table('states')->where('zone_id', $req->id)->update(['zone_id' => NULL]);
      foreach($req->states as $state)
      {
        DB::table('states')->where('id', $state)->update(['zone_id' => $zone->id]);
      }
      return true;
    }
    
  }

  public function deleteZone($id)
  {
    if($zone = $this->getzoneById($id))
    {
      $zone->delete();
      DB::table('states')->where('zone_id', $id)->update(['zone_id' => NULL]);
      return true;
    }
    return false;
  }

  public function getPrice($zone)
  {
    if ($zone = ZoneModel::where('id', $zone)->first())
    {
      return $zone;
    }
    else
    {
      return FALSE;
    }
  }
  public function getZoneByState($state)
  {
    if($zone = DB::table('states')->where('name' , $state)->pluck('zone_id')->toArray())
    {
      // dd($zone);
      return $zone;
    }
  }
}
