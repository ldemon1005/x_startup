<?php

namespace App\Http\Controllers\Client;

use App\Models\Question;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    function index(){
        return view('client.index.home');
    }

    function action_question(Request $request){
        $req = $request->all();

        $req['status'] = 1;

        $req['created_at'] = time();

        if(Question::create($req)){
            return redirect()->route('home')->with('success','Gửi câu hỏi thành công');
        }else {
            return redirect()->route('home')->with('error','Gửi câu hỏi không thành công');
        }
    }
}
