<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cat;
use App\News;
use App\Aboutme;
use App\Comment;

class AjaxController extends Controller
{
    public function __construct(Cat $mcat, News $mnews, Aboutme $maboutme, Comment $mcomment){
		$this->mcat = $mcat;
        $this->mnews = $mnews;
        $this->maboutme = $maboutme;
        $this->mcomment = $mcomment;
	}
    // public function postTrangthai(Request $req){
    // 	$trangthai = $req->aTrangthai;
    // 	$id = $req->aId;
    // 	if($trangthai==0) {
    // 		$trangthai=1;
    // 	} else {
    // 		$trangthai=0;
    // 	}
    // 	$item = [
    //         'status' => $trangthai,
    //     ];
    //     $this->mcat->editItem($id, $item);
    //     // $cats = $this->mcat->getList();
    //     // return view('admin.cat.trangthai', compact('cats'));
    //     $cat = $this->mcat->getItem($id);
    //     return view('admin.cat.trangthai', compact('cat'));
    // }
    public function postTrangthaiNews(Request $req){
        $trangthai = $req->aTrangthai;
        $id = $req->aId;
        //dd($trangthai);
        if($trangthai==0) {
            $trangthai=1;
        } else {
            $trangthai=0;
        }
        $item = [
            'active' => $trangthai,
        ];
        $this->mnews->editItem($id, $item);
        $new = $this->mnews->getItem($id);
        return view('admin.news.status', compact('new'));
    }
    public function hahaha(Request $req){
        $soluongActive = $this->mnews->getSoluongActive();
        return view('admin.news.soluong', compact('soluongActive'));
    }
    public function postTrangthaiaboutme(Request $req){
        $id = $req->aId;
        $item = [
            'active' =>0,
        ];
        $this->maboutme->editItemAll($item);
        $item2 = [
            'active' =>1,
        ];
        $this->maboutme->editItem($id, $item2);
        $aboutmes = $this->maboutme->getList();
        return view('admin.aboutme.status', compact('aboutmes'));
    }
    public function postSearchnews(Request $req){
        $keyword = $req->keyword;
        //dd($search_keyword);
        $news = $this->mnews->searchNews($keyword);

        return view('admin.news.search',compact('news'));
    }
    public function postHienthiComment(Request $req){
        $nameCm = $req->aNameCm;
        $noidungCm = $req->aNoidungCm;
        $idNewsCm = $req->aIdNews;
        $item = [
            'name' => $nameCm,
            'content' => $noidungCm,
            'id_news' => $idNewsCm,
        ];
        $this->mcomment->addItem($item);
        $sumComment  = $this->mcomment->getSumComment($idNewsCm);
        $comments    = $this->mcomment->getComments($idNewsCm);
        return view('aboutme.news.comment',compact('comments','sumComment'));
    }
    public function postHienthiCommentCon(Request $req){
        $nameCmCon = $req->aNameCmCon;
        $noidungCmCon = $req->aNoidungCmCon;
        $idNewsCmCon = $req->aIdNewsCon;
        $idCha         = $req->aIdCha;
       // echo $idCha;
        //dd($nameCmCon);
        //dd($noidungCmCon);
        //dd($idNewsCmCon);
        //dd($idCha);
        $item1 = [
            'name' => $nameCmCon,
            'content' => $noidungCmCon,
            'id_news' => $idNewsCmCon,
            'parent_id' => $idCha
        ];
        $this->mcomment->addItem($item1);
        $comments1 = $this->mcomment->getCommentCon($idCha, $idNewsCmCon);
        //dd($comments);
        //$sumComment  = $this->mcomment->getSumComment($idNewsCmCon);
        //$comments    = $this->mcomment->getComments($idNewsCm);
        //return view('aboutme.news.commentcon', compact('comments'));
        return view('aboutme.news.commentcon',compact('comments1'));
    }
    public function postSearchnewsPublic(Request $req){
        $search_keyword1 = $req->search_keyword1;
        $newspublics = $this->mnews->searchNewsPublic($search_keyword1);
        //dd($newspublics);
        return view('aboutme.news.search',compact('newspublics'));
    }
    public function postNumberComment(Request $request){
        $id = $request->aId;
       // dd($id);
        $sumComment  = $this->mcomment->getSumComment($id);
        //$sumComment  = $this->mcat->getCountCat();
        
        return view('aboutme.news.numbercomment',compact('sumComment'));
    }
    public function getLoadmore(){
        // $haha = $this->mnews->getListPublic(3);
        // $num = $haha->count();
        // $num1 = $num+3;
        $newss1 = $this->mnews->getListPublic(6);
        //dd($newss);
        return view('aboutme.aboutme.getloadmore',compact('newss1'));
    }
    // public function fetch_data(Request $request){
        
    //      //dd($data);
    //     $haha = $request->page;
    //     dd($haha);
    //     if($request->ajax())
    //     {
    //         $newss = $this->mnews->getListPublic();
    //         //dd($newss);
    //         return view('aboutme.aboutme.getdata', compact('newss'));
    //     }
    // }
}
