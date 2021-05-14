<?php

namespace App\Classes;

use App\Tax as TaxModel;
use App\StateTax as StateTaxModel;
use App\Models\State as StateModel;
use Illuminate\Support\Facades\DB;


class TaxManager
{
  public function stateslist()
  {
    return StateModel::with('tax')->get();
  }

  public function addZone($req)
  {
    $data = [
      'title' => $req->title,
      'product_price' => $req->product_price,
      'hardware_price' => json_encode($req->hardware),
      ];
      if ($zone = TaxModel::create($data)) 
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

  public function getTax($req)
  {
    if ( $req->title !== null ) {
      $zone_list = TaxModel::with('state')
              ->where('title', 'like', '%' . $req->title . '%')
              ->orderBy('id', 'desc')
              ->paginate(8);
      return $zone_list;
    }
    $zone_list = TaxModel::with('stateTax')->paginate(8);
    return $zone_list;
  }

  public function getTaxByStateId($id)
  {
    $tax = StateTaxModel::where('state_id' , $id)->with('tax')->first();
    return $tax;
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
      'hardware_price' =>  json_encode($req->hardware),
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
    if ($zone = TaxModel::where('id', $zone)->first())
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
      return $zone;
    }
  }
}
