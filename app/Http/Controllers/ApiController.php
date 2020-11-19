<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Classes\AddressManager;
use App\Classes\HelperManager as Common;
use Illuminate\Support\Facades\Auth;

class ApiController extends Controller
{
    public function add_address(Request $req)
    {
        $req->validate([
            'user_id'    => 'required|integer',
            'address'    => 'required|string',
            'type'    => 'required|integer|between:1,2',
        ]);
        $result = AddressManager::add($req);
        if ($result !== false) {
            return Common::response('success', 'Address Add Successfully!', $result);
        } else {
            return Common::response('error', 'Address Add Failed!');
        }
    }
}
