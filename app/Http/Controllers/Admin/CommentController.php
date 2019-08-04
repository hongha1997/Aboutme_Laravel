<?php

namespace App\Http\Controllers\Admin;
use App\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    public function __construct(Comment $mcomment){
		$this->mcomment = $mcomment;
	}
	public function index(){
    	$comments = $this->mcomment->getList();
        return view('admin.comment.index', compact('comments'));
    }
    public function del($id) {
    	$result = $this->mcomment->delItem($id);
    	if($result) {
        	return redirect()
        		->route('admin.comment.index')
        		->with('msg', 'Xóa thành công');
        } else {
        	return redirect()
        		->route('admin.comment.index')
        		->with('msg', 'Lỗi');
        }
    }
}
