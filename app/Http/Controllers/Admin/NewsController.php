<?php

namespace App\Http\Controllers\Admin;
use App\News;
use App\Cat;
use App\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function __construct(News $mnews, Cat $mcat, Comment $mcomment){
		$this->mnews = $mnews;
		$this->mcat = $mcat;
        $this->mcomment = $mcomment;
	}
	public function index(){
    	$news = $this->mnews->getList();
        $soluongActive = $this->mnews->getSoluongActive();
        return view('admin.news.index', compact('news','soluongActive'));
    }
    public function getAdd(){
    	$cats = $this->mcat->getListForNews();
        return view('admin.news.add', compact('cats'));
    }
    public function postAdd(Request $request){
        $request->validate(
            [
                'name_news' => 'required',
                'mota' => 'required',
                'chitiet' => 'required',
            ],
            [
                'name_news.required'=>'Yều cầu nhập',
                'mota.required'=>'Yều cầu nhập',
                'chitiet.required'=>'Yều cầu nhập',
            ]
        );
        $name_news 		= $request->name_news;       
        $cat_news 		= $request->cat_news;
        $mota 			= $request->mota;
        $chitiet 		= $request->chitiet;
        if($request->hasFile('picture')){
            $file = $request->file('picture');
            $duoi = $file->getClientOriginalExtension();
            if($duoi!='jpg' && $duoi!='png' && $duoi!='jpeg' ){
                return redirect()
        		->route('admin.news.add')
        		->with('loi','Chỉ được chọn file ảnh');
            }
            $name = $file->getClientOriginalName();
            
            $Hinh = str_random(4)."_".$name;
            while (file_exists("templates/hinhanhtintuc/".$Hinh)) { // Tồn tại thì nó trả về TRUE
                $Hinh = str_random(4)."_".$name;
            }
            $file->move('templates/hinhanhtintuc',$Hinh);
            $picture = $Hinh;
        } else {
            $picture = "";
        }
        $item = [
        	'name' => $name_news,
        	'preview_text' => $mota,
        	'detail_text' => $chitiet,
        	'picture' => $picture,
        	'count_number' => 0,
        	'id_cat' => $cat_news,
        	'active' => 1,
        ];
        $result = $this->mnews->addItem($item);
        if($result) {
        	return redirect()
        		->route('admin.news.index')
        		->with('msg', 'Thêm thành công');
        } else {
        	return redirect()
        		->route('admin.news.index')
        		->with('msg', 'Lỗi');
        }
    }
    public function del($id) {
    	$picture = $this->mnews->getOldPicture($id);
    	$oldPicture = $picture->picture;
        if ($oldPicture !="" && file_exists('templates/hinhanhtintuc/'.$oldPicture)) {
            unlink('templates/hinhanhtintuc/'.$oldPicture);          
        }
    	$result = $this->mnews->delItem($id);
    	if($result) {
        	return redirect()
        		->route('admin.news.index')
        		->with('msg', 'Xóa thành công');
        } else {
        	return redirect()
        		->route('admin.news.index')
        		->with('msg', 'Lỗi');
        }
    }
    public function getEdit($id) {
        $comments = $this->mcomment->getListCommentNews($id);
    	$news = $this->mnews->getItem($id);
    	$cats = $this->mcat->getListForNews();
    	return view('admin.news.edit', compact('id', 'news','cats','comments'));
    }
    public function postEdit(Request $request, $id){
        $request->validate(
            [
                'name_news' => 'required',
                'mota' => 'required',
                'chitiet' => 'required',
            ],
            [
                'name_news.required'=>'Yều cầu nhập',
                'mota.required'=>'Yều cầu nhập',
                'chitiet.required'=>'Yều cầu nhập',
            ]
        );
        $picture = $this->mnews->getOldPicture($id);
        $oldPicture = $picture->picture;
        // if ($oldPicture !="" && file_exists('templates/bstory/hinhanh/'.$oldPicture)) {
        //     unlink('templates/bstory/hinhanh/'.$oldPicture);          
        // }
        $name_news 		= $request->name_news;       
        $cat_news 		= $request->cat_news;
        $mota 			= $request->mota;
        $chitiet 		= $request->chitiet;
        $xoa            = $request->xoa;
        //dd($xoa);
        if($xoa==1){
            if ($oldPicture !="" && file_exists('templates/hinhanhtintuc/'.$oldPicture)) {
                unlink('templates/hinhanhtintuc/'.$oldPicture);
            }
        }
        if($request->hasFile('picture')){
            $file = $request->file('picture');
            $duoi = $file->getClientOriginalExtension();
            if($duoi!='jpg' && $duoi!='png' && $duoi!='jpeg' ){
                return redirect()
        		->route('admin.news.edit')
        		->with('loi','Chỉ được chọn file ảnh');
            }
            $name = $file->getClientOriginalName();
            $Hinh = str_random(4)."_".$name;
            while (file_exists("templates/hinhanhtintuc/".$Hinh)) { // Tồn tại thì nó trả về TRUE
                $Hinh = str_random(4)."_".$name;
            }
            $file->move('templates/hinhanhtintuc',$Hinh);
            //if($xoa==1){
                if ($oldPicture !="" && file_exists('templates/hinhanhtintuc/'.$oldPicture)) {
                    unlink('templates/hinhanhtintuc/'.$oldPicture);
                }
            //}
            $picture = $Hinh;
        } else {
            $picture = $oldPicture;
        }
        if($xoa==1){
            $item = [
                'name' => $name_news,
                'preview_text' => $mota,
                'detail_text' => $chitiet,
                'picture' => "",
                'count_number' => 0,
                'id_cat' => $cat_news,
                'active' => 1,
            ];
        } else {
            $item = [
            	'name' => $name_news,
            	'preview_text' => $mota,
            	'detail_text' => $chitiet,
            	'picture' => $picture,
            	'count_number' => 0,
            	'id_cat' => $cat_news,
            	'active' => 1,
            ];
        }
        $result = $this->mnews->editItem($id, $item);
        if($result) {
        	return redirect()
        		->route('admin.news.index')
        		->with('msg', 'Sửa thành công');
        } else {
        	return redirect()
        		->route('admin.news.index')
        		->with('msg', 'Lỗi');
        }
    }
}
