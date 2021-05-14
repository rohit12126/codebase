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

  public function addTax($req)
  {
    $data = [
      'title' => $req->title,
      'rate' => $req->rate,
      'rate_type' => $req->rate_type,
      ];
      if ($zone = TaxModel::create($data)) 
      {
        foreach($req->states as $state)
        {
          $stateData['tax_id'] = $zone->id;
          $stateData['state_id'] = $state;
        }
        StateTaxModel::create($stateData);
        return true;
      }
      else 
      {
          return false;
      }
  }

  public function getTaxById($id)
  {
    return TaxModel::findOrFail($id);
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

  public function updateTax($req, $id)
  {
    $tax = null;
    if ($exist = $this->getTaxById($req->id)) {
        $tax = $exist;
    } else {
        return false;
    }
    $data = [
      'title' => $req->title,
      'rate' => $req->rate,
      'rate_type' => $req->rate_type,
      ];
    if($tax->fill($data)->save())
    {
      $tax->tax()->delete();
      foreach($req->states as $state)
        {
          $stateData[] = ['tax_id' => $id,
                    'state_id' => $state];
        }
        $tax->tax()->createMany($stateData);
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
