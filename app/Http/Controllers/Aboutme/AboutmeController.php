<?php

namespace App\Http\Controllers\Aboutme;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Aboutme;
use App\Skill;
use App\Projects;
use App\Advs;
use App\News;
use App\Contact;
class AboutmeController extends Controller
{
	public function __construct(Aboutme $maboutme, Skill $mskill, Projects $mprojects, Advs $madvs,News $mnews,Contact $mcontact){
		$this->maboutme 	= $maboutme;
		$this->mskill 		= $mskill;
		$this->mprojects 	= $mprojects;
		$this->madvs 		= $madvs;
		$this->mnews 		= $mnews;
		$this->mcontact 	= $mcontact;
	}
    public function index() {
    	$aboutme = $this->maboutme->getItemPublic();
    	$skills  = $this->mskill->getListPublic();
    	$projects = $this->mprojects->getListPublic();
    	$advss = $this->madvs->getListPublic();
    	//$newss = $this->mnews->getListPublic();
        $newss = $this->mnews->getListPublicHaha(3);
        //dd($newss);
    	$countProject = $this->mprojects->getCountProjects();
    	return view('aboutme.aboutme.index',compact('aboutme', 'skills','projects','advss','newss','countProject'));
    }
    public function postIndex(Request $request) {
    	$request->validate(
            [
                'hoten' => 'required',
                'email' => 'required | email | unique:contact',
                'diachi' => 'required',
                'sdt' => 'required',
                'noidung' => 'required',
            ],
            [
                'hoten.required'=>'Yều cầu nhập',
                'email.required'=>'Yều cầu nhập',
                'email.email'=>'Yều cầu nhập định dạng Email',
                'email.unique'  =>'Email đã tồn tại',
                'diachi.required'=>'Yều cầu nhập',
                'sdt.required'=>'Yều cầu nhập',
                'noidung.required'=>'Yều cầu nhập',
            ]
        );
        $hoten = $request->hoten;
        $email = $request->email;
        $diachi = $request->diachi;
        $sdt = $request->sdt;
        $noidung = $request->noidung;
        $item = [
        	'fullname' => $hoten,
        	'email' => $email,
        	'address' => $diachi,
        	'phone' => $sdt,
        	'content' => $noidung,
        ];
        $result = $this->mcontact->addItem($item);
        if($result) {
        	return redirect()
        		->route('aboutme.aboutme.index')
        		->with('msg', 'Gửi thành công');
        } else {
        	return redirect()
        		->route('aboutme.aboutme.index')
        		->with('msg', 'Lỗi');
        }
    }
}
