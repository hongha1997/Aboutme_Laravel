<?php

namespace App\Http\Controllers\Aboutme;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cat;
use App\News;
use App\Comment;
class AboutmeNewsController extends Controller
{
	public function __construct(Cat $mcat, News $mnews, Comment $mcomment){
		$this->mcat = $mcat;
		$this->mnews =$mnews;
      $this->mcomment =$mcomment;
	}
	public function index() {
		$catsLeftbar = $this->mcat->getListForLeftBar();
		$newsNews	 = $this->mnews->getListNew();
		$newsPublic  = $this->mnews->getListPublic();
		return view('aboutme.news.index', compact('catsLeftbar', 'newsNews' ,'newsPublic'));
	}
   public function cat($slug, $id) {
      	$catsLeftbar = $this->mcat->getListForLeftBar();
      	$newsNews    = $this->mnews->getListNew();
      	$catNews        = $this->mnews->getItemCat($id);
      	$catName     = $this->mcat->getItem($id);
      	return view('aboutme.news.cat', compact('catsLeftbar', 'newsNews','catNews','catName'));
   }
   public function detail($slug, $id, Request $req){
   		$catsLeftbar = $this->mcat->getListForLeftBar();
      	$newsNews    = $this->mnews->getListNew();
      	$new 		 = $this->mnews->getItem($id);
      	$id_cat		 = $new->id_cat;
      	$newLienquan = $this->mnews->getLienQuan($id_cat,$id);
         //$aa = $new->id_news;
         if($req->session()->has('haha'.$id)==false){
            //số lượt xem tăng
            $hihi = $this->mnews->getItem($id);
            $soluotxem = $hihi->count_number;
            //dd($soluotxem);
            $item = [
                'count_number' => $soluotxem+1,
            ];
            $this->mnews->haha($id, $item);
            $req->session()->put('haha'.$id, 'huhu');
         }
         $zzz = $this->mnews->getItem($id);
         
         $soluotxem = $zzz->count_number;
         // dd($soluotxem);
         $sumComment  = $this->mcomment->getSumComment($id);
         $comments    = $this->mcomment->getComments($id);
      	return view('aboutme.news.detail', compact('catsLeftbar', 'newsNews', 'new','newLienquan','sumComment','comments','soluotxem'));
   }
}
