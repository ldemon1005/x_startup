<?php

namespace App\Http\Controllers\Admin;

use App\Models\Question;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\View;

class QuestionController extends Controller
{
    public $mail_data;

    function index(Request $request){
        $req = $request->all();

        $list_question = DB::table('question')->paginate(15);

        foreach ($list_question as $question){
            $user_update = DB::table('accounts')->find($question->user_update);
            $question->user_update = $user_update;
        }


        $data = [
            'list_question' => $list_question
        ];

        return view('admin.question.index',$data);
    }

    function update_status($id){
        $question = Question::find($id);
        $question->status == 2 ? $question->status = 1 : $question->status = 2;
        $question->save();
        return json_encode([
            'question' => $question->toJson()
        ]);
    }

    function form_send_mail($id){
        $question = Question::find($id);

        $data = [
            'question' => $question
        ];

        $view = View::make('admin.question.send_mail',$data)->render();

        return json_encode([
            'content' => $view
        ]);
    }

    function send_email(Request $request){
        $req = $request->all();

        $user = Auth::user();

        $question = Question::find($req['id']);

        $data = [
            'email' => $req['email'],
            'fullname' => $question->fullname,
            'content' => $req['content_send']
        ];

        $this->mail_data = [
            'email' => $req['email'],
            'fullname' => $question->fullname
        ];

        Mail::send('admin.send_mail_req', $data, function($message){
            $message->to($this->mail_data['email'],$this->mail_data['fullname'] )->subject('Email phản hồi từ X-startup');
        });

        $question->updated_at = time();
        $question->content_send = $req['content_send'];
        $question->user_update = $user->id;

        if ($question->save()){
            return redirect()->route('list_question')->with('success','Gửi email phản hồi thành công');
        }else {
            return redirect()->route('list_question')->with('error','Gửi email phản hồi không thành công');
        }


    }
}
