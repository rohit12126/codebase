<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Classes\FaqManager;
use App\Classes\HelperManager as Common;

class FaqController extends Controller
{
    protected $faqManager;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        FaqManager $faqManager
    )
    {
        $this->faqManager = $faqManager;
    }

    public function index()
    {
        $category_list = $this->faqManager->getCategoryList();
        return view('dashboard.faq',compact('category_list')); 
    }
    public function addFaq(Request $req)
    {
        $response = $this->faqManager->add($req);
        if($response == true){
            Common::setMessage(__('faq_add_success'));
        }else{
            Common::setMessage(__('faq_add_failed'), 'error');
        }
        return back();
    }
    public function addFaqCategory(Request $req)
    {
        $response = $this->faqManager->addCategory($req);
        if($response == true){
            Common::setMessage(__('faq_catagorey_add_success'));
        }else{
            Common::setMessage(__('faq_catagorey_add_failed'), 'error');
        }
        return back();
    }
    public function faqList(Request $req)
    {
        $faq_list = $this->faqManager->getfaqListPaginated($req);
        return view('dashboard.faq_list', compact('faq_list'));
    }
    public function editFaq($id)
    {
        $faq = $this->faqManager->getFaqById($id);
        $category_list = $this->faqManager->getCategoryList();
        return view('dashboard.faq', compact('category_list', 'faq'));
    }

    public function editSubmitFaq(Request $req)
    {
        $response = $this->faqManager->edit($req);
        if($response == true){
            Common::setMessage(__('faq_update_success'));
            return redirect()->route('admin.faq.list');
        }else{
            Common::setMessage(__('faq_update_falied'), 'error');
        }
        return redirect()->route('admin.faq.list');
    }

    public function deleteFaq($id)
    {
        $response = $this->faqManager->delete($id);
        if($response == true){
            Common::setMessage(__('faq_delete_success'));
        }else{
            Common::setMessage(__('faq_delete_failed'), 'error');
        }
        return back();      
    }
}
