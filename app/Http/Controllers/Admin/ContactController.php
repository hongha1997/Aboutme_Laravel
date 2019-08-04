<?php

namespace App\Http\Controllers\Admin;
use App\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mail;
class ContactController extends Controller
{
    public function __construct(Contact $mcontact){
		$this->mcontact = $mcontact;
	}
	public function index(){
    	$contacts = $this->mcontact->getList();
        return view('admin.contact.index', compact('contacts'));
    }
    public function postIndex(Request $request){
        $id = $request->id;
        $email = $request->email;
        //dd($email);
        $tieude = $request->tieude;
        $data = ['noidung'=>$request->input('noidung')];
        Mail::send('admin.contact.contentemail',$data,function($msg) use ($email, $tieude)
        {
            $msg->from('duonghongha13061997@gmail.com','AboutMe');
            $msg->to($email,'Hà Dương')->subject($tieude);
        });
        $item = [
            'active' => 1,
        ];
        $this->mcontact->editItem($id,$item);
        return redirect()
                ->route('admin.contact.index')
                ->with('msg', 'Trả lời mail lại cho "'.$email.'" thành công');
    }
    public function del($id) {
    	$result = $this->mcontact->delItem($id);
    	if($result) {
        	return redirect()
        		->route('admin.contact.index')
        		->with('msg', 'Xóa thành công');
        } else {
        	return redirect()
        		->route('admin.contact.index')
        		->with('msg', 'Lỗi');
        }
    }
}
