<?php

namespace App\Http\Controllers\Admin;
use App\Advs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdvsController extends Controller
{
    public function __construct(Advs $madvs){
		$this->madvs = $madvs;
	}
	public function index(){
    	$advss = $this->madvs->getList();
        return view('admin.advs.index', compact('advss'));
    }
    public function getAdd(){
        return view('admin.advs.add');
    }
    public function postAdd(Request $request){
        $request->validate(
            [
                'name_advs' => 'required',
                'link' => 'required',
            ],
            [
                'name_advs.required'=>'Yều cầu nhập',
                'link.required'=>'Yều cầu nhập',
            ]
        );
        $name_advs 		= $request->name_advs;       
        $link 		= $request->link;
        if($request->hasFile('picture')){
            $file = $request->file('picture');
            $duoi = $file->getClientOriginalExtension();
            if($duoi!='jpg' && $duoi!='png' && $duoi!='jpeg' ){
                return redirect()
        		->route('admin.advs.add')
        		->with('loi','Chỉ được chọn file ảnh');
            }
            $name = $file->getClientOriginalName();
            
            $Hinh = str_random(4)."_".$name;
            while (file_exists("templates/advs/".$Hinh)) { // Tồn tại thì nó trả về TRUE
                $Hinh = str_random(4)."_".$name;
            }
            $file->move('templates/advs',$Hinh);
            $picture = $Hinh;
        } else {
            $picture = "";
        }
        $item = [
        	'name' => $name_advs,
        	'banner' => $picture,
        	'link' => $link,
        ];
        $result = $this->madvs->addItem($item);
        if($result) {
        	return redirect()
        		->route('admin.advs.index')
        		->with('msg', 'Thêm thành công');
        } else {
        	return redirect()
        		->route('admin.advs.index')
        		->with('msg', 'Lỗi');
        }
    }
    public function del($id) {
    	$picture = $this->madvs->getOldPicture($id);
    	$oldPicture = $picture->banner;
        if ($oldPicture !="" && file_exists('templates/advs/'.$oldPicture)) {
            unlink('templates/advs/'.$oldPicture);          
        }
    	$result = $this->madvs->delItem($id);
    	if($result) {
        	return redirect()
        		->route('admin.advs.index')
        		->with('msg', 'Xóa thành công');
        } else {
        	return redirect()
        		->route('admin.advs.index')
        		->with('msg', 'Lỗi');
        }
    }
    public function getEdit($id) {
    	$advs = $this->madvs->getItem($id);
    	return view('admin.advs.edit', compact('id', 'advs'));
    }
    public function postEdit(Request $request, $id){
        $request->validate(
            [
                'name_advs' => 'required',
                'link' => 'required',
            ],
            [
                'name_advs.required'=>'Yều cầu nhập',
                'link.required'=>'Yều cầu nhập',
            ]
        );
        $picture = $this->madvs->getOldPicture($id);
        $oldPicture = $picture->banner;

        $name_advs 		= $request->name_advs;       
        $link 			= $request->link;
        $xoa            = $request->xoa;
        if($xoa==1){
            if ($oldPicture !="" && file_exists('templates/advs/'.$oldPicture)) {
                unlink('templates/advs/'.$oldPicture);
            }
        }
        if($request->hasFile('picture')){
            $file = $request->file('picture');
            $duoi = $file->getClientOriginalExtension();
            if($duoi!='jpg' && $duoi!='png' && $duoi!='jpeg' ){
                return redirect()
        		->route('admin.advs.edit')
        		->with('loi','Chỉ được chọn file ảnh');
            }
            $name = $file->getClientOriginalName();
            $Hinh = str_random(4)."_".$name;
            while (file_exists("templates/advs/".$Hinh)) { // Tồn tại thì nó trả về TRUE
                $Hinh = str_random(4)."_".$name;
            }
            $file->move('templates/advs',$Hinh);
            //if($xoa==1){
                if ($oldPicture !="" && file_exists('templates/advs/'.$oldPicture)) {
                    unlink('templates/advs/'.$oldPicture);
                }
            //}
            $picture = $Hinh;
        } else {
            $picture = $oldPicture;
        }
        if($xoa==1){
            $item = [
	        	'name' => $name_advs,
	        	'banner' => "",
	        	'link' => $link,
	        ];
        } else {
            $item = [
            	'name' => $name_advs,
            	'banner' => $picture,
            	'link' => $link,
            ];
        }
        $result = $this->madvs->editItem($id, $item);
        if($result) {
        	return redirect()
        		->route('admin.advs.index')
        		->with('msg', 'Sửa thành công');
        } else {
        	return redirect()
        		->route('admin.advs.index')
        		->with('msg', 'Lỗi');
        }
    }
}
