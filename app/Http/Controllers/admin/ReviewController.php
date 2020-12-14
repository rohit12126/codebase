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
    
    public function allActive(Request $req)
    {
        $approved = $this->reviewManager->getAllActiveReviews($req);
        return view('dashboard.approved_review_list', compact('approved'));
    }
    public function allInActive(Request $req)
    {
        $approved = $this->reviewManager->getAllInActiveReviews($req);
        return view('dashboard.new_review_list', compact('approved'));

    }
    public function delete($id)
    {
        $response = $this->reviewManager->deleteReview($id);
        if($response == true){
            Common::setMessage(__('review_delete_success'));
        }else{
            Common::setMessage(__('review_delete_failed'), 'error');
        }
        return back();
    }
    public function approv($id)
    {
        $response = $this->reviewManager->aproovReview($id);
        if($response == true){
            Common::setMessage(__('review_aproov_success'));
        }else{
            Common::setMessage(__('review_aproov_failed'), 'error');
        }
        return back();
    }
    public function disapprov($id)
    {
        $response = $this->reviewManager->disapprovReview($id);
        if($response == true){
            Common::setMessage(__('review_disaproov_success'));
        }else{
            Common::setMessage(__('review_disaproov_failed'), 'error');
        }
        return back();
    }
}
