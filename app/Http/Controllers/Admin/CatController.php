<?php

namespace App\Http\Controllers\Admin;
use App\Cat;
use App\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CatController extends Controller
{
    public function __construct(Cat $mcat, News $mnews){
		$this->mcat = $mcat;
        $this->mnews = $mnews;
	}
	public function index(){
    	$cats = $this->mcat->getList();
        return view('admin.cat.index', compact('cats'));
    }
    public function getAdd(){
        return view('admin.cat.add');
    }
    public function postAdd(Request $request){
        $request->validate(
            [
                'namecat' => 'required',
            ],
            [
                'namecat.required'=>'Yều cầu nhập',
            ]
        );
        $namecat = trim($request->namecat);
        $item = [
        	'name' => $namecat,
        ];
        $result = $this->mcat->addItem($item);
        if($result) {
        	return redirect()
        		->route('admin.cat.index')
        		->with('msg', 'Thêm thành công');
        } else {
        	return redirect()
        		->route('admin.cat.index')
        		->with('msg', 'Lỗi');
        }
    }
    public function del($id) {
        //xóa tin trước khi xóa thư mục
        $objNews = $this->mnews->getItemByCat($id);
        foreach ($objNews as $objNew) {
            $oldPicture = $objNew->picture;
            if ($oldPicture !="" && file_exists('templates/hinhanhtintuc/'.$oldPicture)) {
                unlink('templates/hinhanhtintuc/'.$oldPicture);          
            }
            $this->mnews->delItem($objNew->id_news);
        }

    	$result = $this->mcat->delItem($id);
    	if($result) {
        	return redirect()
        		->route('admin.cat.index')
        		->with('msg', 'Xóa thành công');
        } else {
        	return redirect()
        		->route('admin.cat.index')
        		->with('msg', 'Lỗi');
        }
    }
    public function getEdit($id) {
    	$cat = $this->mcat->getItem($id);
    	
    	return view('admin.cat.edit', compact('id', 'cat'));
    }
    public function postEdit(Request $request, $id){
        $request->validate(
            [
                'namecat' => 'required',
            ],
            [
                'namecat.required'=>'Yều cầu nhập',
            ]
        );
        $namecat = trim($request->namecat);
        $item = [
        	'name' => $namecat,
        ];
        $result = $this->mcat->editItem($id, $item);
        if($result) {
        	return redirect()
        		->route('admin.cat.index')
        		->with('msg', 'Sửa thành công');
        } else {
        	return redirect()
        		->route('admin.cat.index')
        		->with('msg', 'Lỗi');
        }
    }
}
