<?php

namespace App\Http\Controllers\Client;

use App\Models\Account;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    function form_login(){
        return view('client.auth.login_form');
    }

    function login(Request $request){
        $arr = ['username' => $request->email, 'password' => $request->password];

        if(Auth::attempt($arr, false)){
            if(Auth::user()->status == 1){
                Auth::logout();
                Session::flush();
                return redirect()->route('login_client')->with('error','Tài khoản không hoạt động, vui lòng liên hệ ban quản trị!');
            }
            return redirect()->route('home')->with('success','Đăng nhập thành công');
        }
        else{
            return redirect()->route('login_client')->with('error','Tài khoản hoặc mật khẩu của bạn không đúng');
        }
    }

    function logout(){
        Auth::logout();
        Session::flush();
        return redirect()->route('home');
    }

    function form_register(){
        $data = [
            'fullname' => '',
            'email' => '',
            'password' => '',
            'password_1' => '',
            'card_id' => '',
            'phone' => ''
        ];

        return view('client.auth.signup',$data);
    }

    function register(Request $request){
        $req = $request->all();

        $user = DB::table('accounts')->where('email',$req['email'])->orWhere('phone',$req['phone'])->orWhere('card_id',$req['card_id'])->first();
        if($user){
            return view('client.auth.signup',$req)->with('error','Email hoặc số điện thoại hoặc số CMND đã tồn tại trên hệ thống ');
        }
        else {
            $req['status'] = 1;
            $password = $req['password'];
            $req['password'] = bcrypt($req['password']);
            $req['created_at'] = time();
            $req['username'] = $req['email'];
            unset($req['password_1']);
            if(Account::create($req)){
                $this->email = $req['email'];
                $data = [
                    'title' => 'kích hoạt tài khoản',
                    'link' => asset('active_user?email='.$req['email'].'&password='.$password),
                    'account' => $req
                ];
                Mail::send('client.send_mail_active', $data, function ($message) {
                    $message->to($this->email, $this->email)->subject('Email xác nhận đăng ký thành viên "Cuộc thi XStartup"');
                });
                return redirect()->route('home')->with('success','Chúng tôi đã gửi 1 email kích hoạt tới email của bạn.');
            }else {
                return view('client.auth.signup',$req)->with('error','Đăng ký không thành công, vui lòng thử lại ');
            }
        }
    }

    function active_user(Request $request){
        $arr = ['username' => $request->email, 'password' => $request->password];

        if(DB::table('accounts')->where('email',$request->email)->update(['status' => 2])){
            Auth::attempt($arr, false);
            return redirect()->route('home')->with('success','Kích hoạt tài khoản thành công');
        }else return redirect()->route('home')->with('error','Kích hoạt tài khoản không thành công');
    }


    function profile(){
        $user = Auth::user();
        $data = [
            'user' => $user
        ];
        return view('client.auth.profile',$data);
    }

    function update_user(Request $request){
        $req = $request->get('user');
        $user = Auth::user();

        $image = $request->file('img');
        if ($request->hasFile('img')) {
            $req['avatar'] = saveImageArticle([$image], 'user');
        }

        if(DB::table('accounts')->where('id',$user->id)->update($req)){
            return back()->with('success','Cập nhật thành công');
        }else {
            return back()->with('error','Cập nhật không thành công');
        }
    }

    function change_pass(){
        return view('client.auth.password');
    }

    function action_change_pass(Request $request){
        $req = $request->all();
        $user = Auth::user();

        if(!Hash::check($req['pass_old'],$user->password)){
            return back()->with('error','Mật khẩu cũ không chính xác');
        }else{
            if(DB::table('accounts')->where('id',$user->id)->update(['password' => bcrypt($req['pass_new_1'])])){
                return back()->with('success','Đổi mật khẩu thành công');
            }else {
                return back()->with('error','Đổi mật khẩu không thành công, vui lòng thử lại sau');
            }
        }
    }

    public $email;

    function forget_password(Request $request){
        $email = $request->get('email');
        $user = DB::table('accounts')->where('email',$email)->first();

        if(!$user){
            return redirect()->route('home')->with('error','Email không tồn tại trên hệ thống');
        }
        $this->email = $email;
        $data = [
            'title' => 'quên mật khẩu',
            'link' => asset('form_forget_pass?email='.$email)
        ];
        Mail::send('client.send_mail', $data, function ($message) {
            $message->to($this->email, $this->email)->subject('Email phản hồi từ X-startup');
        });

        return redirect()->route('home')->with('success','Chúng tôi đã gửi 1 email tới mail của bạn');
    }

    function form_forget_pass(Request $request){
        $email = $request->get('email');
        $data = [
            'email' => $email
        ];
        return view('client.auth.forget_password',$data);
    }

    function action_forgot_pass(Request $request){
        $req = $request->all();

        $pass = bcrypt($req['pass_new_1']);

        if(DB::table('accounts')->where('email',$req['email'])->update(['password' => $pass])){
            $arr = ['username' => $req['email'], 'password' => $req['pass_new_1']];
            if(Auth::attempt($arr, false)){
                if(Auth::user()->status == 1){
                    Auth::logout();
                    Session::flush();
                    return redirect()->route('login_client')->with('error','Tài khoản không hoạt động, vui lòng liên hệ ban quản trị!');
                }
                return redirect()->route('home')->with('success','Cập nhật mật khẩu thành công');
            }
            else{
                return redirect()->route('login_client')->with('error','Cập nhật mật khẩu không thành công');
            }
        }else {
            return redirect()->route('login_client')->with('error','Cập nhật mật khẩu không thành công');
        }
    }
}
