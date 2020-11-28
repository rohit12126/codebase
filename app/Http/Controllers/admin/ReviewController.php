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
    
    public function allActive()
    {
        $approved = $this->reviewManager->getAllActiveReviews();
        return view('dashboard.approved_review_list', compact('approved'));
    }
    public function allInActive()
    {
        $approved = $this->reviewManager->getAllInActiveReviews();
        return view('dashboard.new_review_list', compact('approved'));

    }
    public function delete($id)
    {
        return $this->reviewManager->deleteReview($id);
    }
    public function aproov($id)
    {
        return $this->reviewManager->aproovReview($id);
    }
}
