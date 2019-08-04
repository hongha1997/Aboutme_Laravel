<?php

namespace App\Http\Controllers\Admin;
use App\Skill;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SkillController extends Controller
{
    public function __construct(Skill $mskill){
		$this->mskill = $mskill;
	}
	public function index(){
    	$skills = $this->mskill->getList();
        return view('admin.skill.index', compact('skills'));
    }
    public function getAdd(){
        return view('admin.skill.add');
    }
    public function postAdd(Request $request){
        $request->validate(
            [
                'name' => 'required',
                'giatri' => 'required',
            ],
            [
                'name.required'=>'Yều cầu nhập',
                'giatri.required'=>'Yều cầu nhập',
            ]
        );
        $name = trim($request->name);
        $giatri = $request->giatri;
        $item = [
        	'name' => $name,
        	'giatri' => $giatri,
        ];
        $result = $this->mskill->addItem($item);
        if($result) {
        	return redirect()
        		->route('admin.skill.index')
        		->with('msg', 'Thêm thành công');
        } else {
        	return redirect()
        		->route('admin.skill.index')
        		->with('msg', 'Lỗi');
        }
    }
    public function del($id) {
    	$result = $this->mskill->delItem($id);
    	if($result) {
        	return redirect()
        		->route('admin.skill.index')
        		->with('msg', 'Xóa thành công');
        } else {
        	return redirect()
        		->route('admin.skill.index')
        		->with('msg', 'Lỗi');
        }
    }
    public function getEdit($id) {
    	$skill = $this->mskill->getItem($id);	
    	return view('admin.skill.edit', compact('id', 'skill'));
    }
    public function postEdit(Request $request, $id){
        $request->validate(
            [
                'name' => 'required',
                'giatri' => 'required',
            ],
            [
                'name.required'=>'Yều cầu nhập',
                'giatri.required'=>'Yều cầu nhập',
            ]
        );
        $name = trim($request->name);
        $giatri = $request->giatri;
        $item = [
        	'name' => $name,
        	'giatri' => $giatri,
        ];
        $result = $this->mskill->editItem($id, $item);
        if($result) {
        	return redirect()
        		->route('admin.skill.index')
        		->with('msg', 'Sửa thành công');
        } else {
        	return redirect()
        		->route('admin.skill.index')
        		->with('msg', 'Lỗi');
        }
    }
}
