<?php

namespace App\Http\Controllers\Admin;
use App\Aboutme;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutmeController extends Controller
{
    public function __construct(Aboutme $maboutme){
		$this->maboutme = $maboutme;
	}
	public function index(){
    	$aboutmes = $this->maboutme->getList();
        return view('admin.aboutme.index', compact('aboutmes'));
    }
    public function getAdd(){
        return view('admin.aboutme.add');
    }
    public function postAdd(Request $request){
        $request->validate(
            [
                'nameaboutme' => 'required',
                'chitiet' => 'required',
            ],
            [
                'nameaboutme.required'=>'Yều cầu nhập',
                'chitiet.required'=>'Yều cầu nhập',
            ]
        );
        $nameaboutme = trim($request->nameaboutme);
        $chitiet = trim($request->chitiet);
        $item = [
        	'name' => $nameaboutme,
        	'detail_text' => $chitiet,
        ];
        $result = $this->maboutme->addItem($item);
        if($result) {
        	return redirect()
        		->route('admin.aboutme.index')
        		->with('msg', 'Thêm thành công');
        } else {
        	return redirect()
        		->route('admin.aboutme.index')
        		->with('msg', 'Lỗi');
        }
    }
    public function del($id) {
    	$result = $this->maboutme->delItem($id);
    	if($result) {
        	return redirect()
        		->route('admin.aboutme.index')
        		->with('msg', 'Xóa thành công');
        } else {
        	return redirect()
        		->route('admin.aboutme.index')
        		->with('msg', 'Lỗi');
        }
    }
    public function getEdit($id) {
    	$aboutme = $this->maboutme->getItem($id);	
    	return view('admin.aboutme.edit', compact('id', 'aboutme'));
    }
    public function postEdit(Request $request, $id){
        $request->validate(
            [
                'nameaboutme' => 'required',
                'chitiet' => 'required',
            ],
            [
                'nameaboutme.required'=>'Yều cầu nhập',
                'chitiet.required'=>'Yều cầu nhập',
            ]
        );
        $nameaboutme = trim($request->nameaboutme);
        $chitiet = trim($request->chitiet);
        $item = [
        	'name' => $nameaboutme,
        	'detail_text' => $chitiet,
        ];
        $result = $this->maboutme->editItem($id, $item);
        if($result) {
        	return redirect()
        		->route('admin.aboutme.index')
        		->with('msg', 'Sửa thành công');
        } else {
        	return redirect()
        		->route('admin.aboutme.index')
        		->with('msg', 'Lỗi');
        }
    }
}
