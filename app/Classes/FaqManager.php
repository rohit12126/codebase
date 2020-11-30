<?php

namespace App\Classes;

use App\Faq as FaqModel;
use App\FaqCategory as FaqCategoryModel;
use App\Classes\HelperManager as Common;

class FaqManager
{
    public function add($req)
    {
        $data = [
            'title' => $req->title,
            'body' => $req->description,
            'category'=>$req->category_id,
            'status' => $req->status
        ];
        if (FaqModel::create($data)) {
            return true;
        } else {
            return false;
        }
    }
    public function addCategory($req)
    {
        $data = [
            'category'=>$req->category,
            'status' => $req->status
        ];
        if (FaqCategoryModel::create($data)) {
            return true;
        } else {
            return false;
        }
    }
    public function getCategoryList()
    {
        return FaqCategoryModel::get();
    }
    public function getfaqListPaginated()
    {
        return FaqModel::with('categori')->paginate(5);
    }
    public function delete($id)
    {
        if(FaqModel::where('id',$id)->delete()){
            return true;
        } else {
            return false;
        }
    }
    public function getFaqById($id)
    {
        return FaqModel::find($id);
    }
    public function edit($req)
    {
        $faq = null;
        if ($exist = $this->getFaqById($req->id)) {
            $faq = $exist;
        } else {
            return false;
        }
        $data = [
            'category' => $req->category_id,
            'title' => $req->title,
            'body' => $req->description,
            'status' => $req->status
        ];
        if ($faq->fill($data)->save()) {
            return true;
        } else {
            return false;
        }
    }
}
