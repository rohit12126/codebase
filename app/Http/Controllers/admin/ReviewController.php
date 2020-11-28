<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Classes\ReviewManager;
use App\Classes\HelperManager as Common;

class ReviewController extends Controller
{
    protected $reviewManager;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        ReviewManager $reviewManager
    )
    {
        $this->reviewManager = $reviewManager;
    }
}
