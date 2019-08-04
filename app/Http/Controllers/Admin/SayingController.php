<?php

namespace App\Http\Controllers\Admin;
use App\Saying;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SayingController extends Controller
{
    public function __construct(Saying $msaying){
		$this->msaying = $msaying;
	}
	public function index(){
    	$sayings = $this->msaying->getList();
        return view('admin.saying.index', compact('sayings'));
    }
    public function getAdd(){
        return view('admin.saying.add');
    }
    public function postAdd(Request $request){
        $request->validate(
            [
                'tacgia' => 'required',
                'chitiet' => 'required',
            ],
            [
                'tacgia.required'=>'Yều cầu nhập',
                'chitiet.required'=>'Yều cầu nhập',
            ]
        );
        $tacgia = trim($request->tacgia);
        $chitiet = trim($request->chitiet);
        $item = [
        	'content' => $chitiet,
        	'author' => $tacgia,
        ];
        $result = $this->msaying->addItem($item);
        if($result) {
        	return redirect()
        		->route('admin.saying.index')
        		->with('msg', 'Thêm thành công');
        } else {
        	return redirect()
        		->route('admin.saying.index')
        		->with('msg', 'Lỗi');
        }
    }
    public function del($id) {
    	$result = $this->msaying->delItem($id);
    	if($result) {
        	return redirect()
        		->route('admin.saying.index')
        		->with('msg', 'Xóa thành công');
        } else {
        	return redirect()
        		->route('admin.saying.index')
        		->with('msg', 'Lỗi');
        }
    }
    public function getEdit($id) {
    	$saying = $this->msaying->getItem($id);	
    	return view('admin.saying.edit', compact('id', 'saying'));
    }
    public function postEdit(Request $request, $id){
        $request->validate(
            [
                'tacgia' => 'required',
                'chitiet' => 'required',
            ],
            [
                'tacgia.required'=>'Yều cầu nhập',
                'chitiet.required'=>'Yều cầu nhập',
            ]
        );
        $tacgia = trim($request->tacgia);
        $chitiet = trim($request->chitiet);
        $item = [
        	'content' => $chitiet,
        	'author' => $tacgia,
        ];
        $result = $this->msaying->editItem($id, $item);
        if($result) {
        	return redirect()
        		->route('admin.saying.index')
        		->with('msg', 'Sửa thành công');
        } else {
        	return redirect()
        		->route('admin.saying.index')
        		->with('msg', 'Lỗi');
        }
    }
}
