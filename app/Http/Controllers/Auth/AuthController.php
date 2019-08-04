<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function __construct() {

    }
    public function getLogin() {
    	return view('auth.auth.login');
    }
    public function postLogin(Request $request) {
    	$credentials = $request->only('username', 'password');
    	if (Auth::attempt($credentials)) {
            return redirect()->route('admin.index.index');
        } else {
        	return redirect()->route('auth.auth.login')->with('msg','Sai Username hoặc Password');
        }
    }
    public function logout(){
    	Auth::logout();
    	return redirect()->route('auth.auth.login');
    }
}
