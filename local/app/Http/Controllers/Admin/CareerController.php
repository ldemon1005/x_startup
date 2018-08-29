<?php

namespace App\Http\Controllers\Admin;

use App\Models\Account;
use App\Models\Career;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CareerController extends Controller
{
    function index(Request $request){
        $req = $request->all();
        $list_career = DB::table('careers')->paginate(20);

        foreach ($list_career as $career){
            $user = Account::find($career->user_created);
            $career->user = $user;
        }

        $data = [
            'list_career' => $list_career
        ];

        return view('admin.career.index',$data);
    }

    function form_career($id = 0){
        if($id == 0){
            $career = [
                'id' => 0,
                'name' => '',
                'status' => 2,
            ];
            $career = (object)$career;
        }else {
            $career = Career::find($id);
        }

        $data = [
            'career' => $career
        ];

        return view('admin.career.form_career',$data);
    }

    function action_career(Request $request){
        $req = $request->all();

        $user = Auth::user();

        if($req['id'] == 0){
            $req['created_at'] = time();

            $req['user_created'] = $user->id;
            if($career = Career::create($req)){
                return redirect()->route('list_career')->with('success','Tạo mới thành công');
            }else {
                return redirect()->route('form_career',0)->with('error','Tạo mới không thành công');
            }
        }else {
            $career = Career::find($req['id']);

            if($career->update($req)){
                return redirect()->route('list_career')->with('success','Cập nhật thành công');
            }else {
                return redirect()->route('form_career',0)->with('error','Cập nhật không thành công');
            }
        }
    }

    function update_status($id){
        $career = Career::find($id);
        $career->status == 2 ? $career->status = 1 : $career->status = 2;
        $career->save();

        return json_encode([
            'career' => $career->toJson()
        ]);
    }

    function delete_career($id){
        if(DB::table('careers')->delete($id)){
            return redirect()->route('list_career')->with('success','Xóa thành công');
        }else {
            return redirect()->route('list_career')->with('error','Xóa không thành công');
        }
    }
}
