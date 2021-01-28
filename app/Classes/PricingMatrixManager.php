<?php

namespace App\Classes;

use App\Models\PricingMatrix as PricingModel;

class PricingMatrixManager
{
  public function pricingMatrixList($title)
  {
    if ( $title !== null ) {
      return PricingModel::where('product_family', 'like', '%' . $title . '%')
              ->orWhere('model', 'like', '%' . $title . '%')
              ->orWhere('upc', 'like', '%' . $title . '%')
              ->orderBy('id', 'desc')
              ->paginate(15);
    }
    return PricingModel::orderBy('id', 'desc')
              ->paginate(15);
  }

  public function add($req)
  {

  }

  public function getPricingMatrixById($id)
  {
    return PricingModel::find($id);
  }

  public function delete($id)
  {
    if(PricingModel::find($id)->delete())
    return true;
    return false;
  }
}
