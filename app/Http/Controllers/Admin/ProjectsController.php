<?php

namespace App\Http\Controllers\Admin;
use App\Projects;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectsController extends Controller
{
    public function __construct(Projects $mprojects){
		$this->mprojects = $mprojects;
	}
	public function index(){
    	$projects = $this->mprojects->getList();
        return view('admin.projects.index', compact('projects'));
    }
    public function getAdd(){
        return view('admin.projects.add');
    }
    public function postAdd(Request $request){
        $request->validate(
            [
                'name_projects' => 'required',
                'mota' => 'required',
                'link' => 'required',
            ],
            [
                'name_projects.required'=>'Yều cầu nhập',
                'mota.required'=>'Yều cầu nhập',
                'link.required'=>'Yều cầu nhập',
            ]
        );
        $name_projects 		= $request->name_projects;  
        $mota 				= $request->mota;      
        $link 				= $request->link;
        if($request->hasFile('picture')){
            $file = $request->file('picture');
            $duoi = $file->getClientOriginalExtension();
            if($duoi!='jpg' && $duoi!='png' && $duoi!='jpeg' ){
                return redirect()
        		->route('admin.projects.add')
        		->with('loi','Chỉ được chọn file ảnh');
            }
            $name = $file->getClientOriginalName();
            
            $Hinh = str_random(4)."_".$name;
            while (file_exists("templates/projects/".$Hinh)) { // Tồn tại thì nó trả về TRUE
                $Hinh = str_random(4)."_".$name;
            }
            $file->move('templates/projects',$Hinh);
            $picture = $Hinh;
        } else {
            $picture = "";
        }
        $item = [
        	'name' => $name_projects,
        	'preview_text' => $mota,
        	'picture' => $picture,
        	'link' => $link,
        ];
        $result = $this->mprojects->addItem($item);
        if($result) {
        	return redirect()
        		->route('admin.projects.index')
        		->with('msg', 'Thêm thành công');
        } else {
        	return redirect()
        		->route('admin.projects.index')
        		->with('msg', 'Lỗi');
        }
    }
    public function del($id) {
    	$picture = $this->mprojects->getOldPicture($id);
    	$oldPicture = $picture->picture;
        if ($oldPicture !="" && file_exists('templates/projects/'.$oldPicture)) {
            unlink('templates/projects/'.$oldPicture);          
        }
    	$result = $this->mprojects->delItem($id);
    	if($result) {
        	return redirect()
        		->route('admin.projects.index')
        		->with('msg', 'Xóa thành công');
        } else {
        	return redirect()
        		->route('admin.projects.index')
        		->with('msg', 'Lỗi');
        }
    }
    public function getEdit($id) {
    	$project = $this->mprojects->getItem($id);
    	return view('admin.projects.edit', compact('id', 'project'));
    }
    public function postEdit(Request $request, $id){
        $request->validate(
            [
                'name_projects' => 'required',
                'mota' => 'required',
                'link' => 'required',
            ],
            [
                'name_projects.required'=>'Yều cầu nhập',
                'mota.required'=>'Yều cầu nhập',
                'link.required'=>'Yều cầu nhập',
            ]
        );
        $picture = $this->mprojects->getOldPicture($id);
        $oldPicture = $picture->picture;

        $name_projects 		= $request->name_projects;  
        $mota 				= $request->mota;      
        $link 				= $request->link;
        $xoa            = $request->xoa;
        if($xoa==1){
            if ($oldPicture !="" && file_exists('templates/projects/'.$oldPicture)) {
                unlink('templates/projects/'.$oldPicture);
            }
        }
        if($request->hasFile('picture')){
            $file = $request->file('picture');
            $duoi = $file->getClientOriginalExtension();
            if($duoi!='jpg' && $duoi!='png' && $duoi!='jpeg' ){
                return redirect()
        		->route('admin.projects.edit')
        		->with('loi','Chỉ được chọn file ảnh');
            }
            $name = $file->getClientOriginalName();
            $Hinh = str_random(4)."_".$name;
            while (file_exists("templates/projects/".$Hinh)) { // Tồn tại thì nó trả về TRUE
                $Hinh = str_random(4)."_".$name;
            }
            $file->move('templates/projects',$Hinh);
            //if($xoa==1){
                if ($oldPicture !="" && file_exists('templates/projects/'.$oldPicture)) {
                    unlink('templates/projects/'.$oldPicture);
                }
            //}
            $picture = $Hinh;
        } else {
            $picture = $oldPicture;
        }

        if($xoa==1){
	        $item = [
	        	'name' => $name_projects,
	        	'preview_text' => $mota,
	        	'picture' => "",
	        	'link' => $link,
	        ];
        } else {
            $item = [
	        	'name' => $name_projects,
	        	'preview_text' => $mota,
	        	'picture' => $picture,
	        	'link' => $link,
	        ];
        }
        $result = $this->mprojects->editItem($id, $item);
        if($result) {
        	return redirect()
        		->route('admin.projects.index')
        		->with('msg', 'Sửa thành công');
        } else {
        	return redirect()
        		->route('admin.projects.index')
        		->with('msg', 'Lỗi');
        }
    }
}
