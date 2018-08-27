<?php

namespace App\Http\Controllers\Client;

use App\Models\Account;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    function form_login(){
        return view('client.auth.login');
    }

    function login(Request $request){
        $arr = ['username' => $request->email, 'password' => $request->password];

        if(Auth::attempt($arr, false)){
            return redirect()->route('home')->with('success','Đăng nhập thành công');
        }
        else{
            return back()->withInput()->with('error','Tài khoản khặc mật khẩu của bạn không đúng');
        }
    }

    function logout(){
        Auth::logout();
        Session::flush();
        return redirect()->route('home');
    }

    function form_register(){
        return view('client.auth.signup');
    }

    function register(Request $request){
        $req = $request->all();

        $user = DB::table('accounts')->where('email',$req['email'])->orWhere('phone',$req['phone'])->orWhere('card_id',$req['card_id'])->first();
        if($user){
            return view('client.auth.signup',$req);
        }
        else {
            $req['status'] = 2;
            $req['password'] = bcrypt($req['password']);
            $req['created_at'] = time();

        }

    }
}
